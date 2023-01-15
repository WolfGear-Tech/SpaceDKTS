<?php

namespace App\Controller;

use App\Helper\ClientHelper;
use App\Form\AddSpaceshipType;
use App\Form\DeleteSpaceshipType;
use App\Form\UpdateSpaceshipType;
use App\Entity\Spaceship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SpaceshipController extends AbstractController
{
    private ClientHelper $clientHelper;

    public function __construct(ClientHelper $clientHelper)
    {
        $this->clientHelper = $clientHelper;
    }

    #[Route('/spaceship', name: 'spaceship')]
    public function index(): Response
    {   
        $data['admin'] = true;
        $data['spaceships'] = $this->clientHelper->getSpaceships();
        return $this->render('spaceship/index.html.twig', $data);
    }

    #[Route('/spaceship/add', name: 'spaceship_add')]
    public function addSpaceship(Request $request, EntityManagerInterface $em): Response
    {
        $spaceship = new Spaceship();
        $form = $this->createForm(AddSpaceshipType::class, $spaceship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoders = [new XmlEncoder(), new JsonEncoder()];
            $normalizers = [new ObjectNormalizer()];

            $serializer = new Serializer($normalizers, $encoders);

            $spaceship = $form->getData();
            $spaceship_array = $serializer->normalize($spaceship, null);

            $response = $this->clientHelper->createSpaceship($spaceship_array);

            return $this->redirectToRoute('spaceship');
        }

        $data['title'] = 'Add Spaceship';
        $data['form'] = $form->createView();

        return $this->render('spaceship/add.html.twig', $data);
    }

    #[Route('/spaceship/{id}', name: 'spaceship_show')]
    public function show($id): Response
    {
        $response = $this->clientHelper->getSpaceship($id);

        $data['id'] = $id;
        $data['spaceship'] = $response;
        return $this->render('spaceship/show.html.twig', $data);
    }

    #[Route('/spaceship/{id}/edit', name: 'spaceship_edit')]
    public function edit($id, Request $request, EntityManagerInterface $em): Response
    {
        $spaceship = $this->clientHelper->getSpaceship($id);
        $form = $this->createForm(UpdateSpaceshipType::class, $spaceship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoders = [new XmlEncoder(), new JsonEncoder()];
            $normalizers = [new ObjectNormalizer()];

            $serializer = new Serializer($normalizers, $encoders);

            $spaceship = $form->getData();
            $spaceship_array = $serializer->normalize($spaceship, null);

            $response = $this->clientHelper->updateSpaceship($id, $spaceship_array);
            return $this->redirectToRoute('spaceship');
        }
        
        $data['title'] = 'Edit Spaceship';
        $data['id'] = $id;
        $data['spaceship'] = $spaceship;
        $data['form'] = $form->createView();
        
        return $this->render('spaceship/edit.html.twig', $data);
    }

    #[Route('/spaceship/{id}/delete', name: 'spaceship_delete')]
    public function delete($id, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(DeleteSpaceshipType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $response = $this->clientHelper->deleteSpaceship($id);
            return $this->redirectToRoute('spaceship');
        }

        $data['id'] = $id;
        $data ['title'] = 'Delete Spaceship';
        $data['spaceship'] = $this->clientHelper->getSpaceship($id);
        $data['form'] = $form->createView();

        return $this->render('spaceship/delete.html.twig', $data);
    }
}