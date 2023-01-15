<?php

namespace App\Controller;

use App\Form\AdminType;
use App\Helper\ClientHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    private $admin_key;
    private ClientHelper $clientHelper;

    public function __construct(string $admin_key, ClientHelper $clientHelper)
    {
        $this->admin_key = $admin_key;
        $this->clientHelper = $clientHelper;
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $data['title'] = 'Home';
        $data['description'] = 'Space DKTS is a space for the DKTS community to share their projects and ideas.';
        $data['spaceships'] = $this->clientHelper->getSpaceships();
        return $this->render('main/index.html.twig', $data);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $data['title'] = 'About';
        $data['description'] = 'Space DKTS is a space for the DKTS community to share their projects and ideas.';
        return $this->render('main/about.html.twig', $data);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $data['title'] = 'Contact';
        $data['description'] = 'Space DKTS is a space for the DKTS community to share their projects and ideas.';
        return $this->render('main/contact.html.twig', $data);
    }
}