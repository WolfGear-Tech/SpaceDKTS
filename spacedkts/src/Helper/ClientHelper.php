<?php

namespace App\Helper;

use App\Entity\Spaceship;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ClientHelper
{
    const API_URL = 'http://api:3000/spaceships';
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getSpaceships(): array
    {
        $response = $this->client->request('GET', self::API_URL);
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $content = $response->toArray();
            return $content;
        } else {
            return [];
        }
    }

    public function getSpaceship($id): array
    {
        $response = $this->client->request('GET', self::API_URL . '/' . $id);
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $content = $response->toArray();
            return $content;
        } else {
            return [];
        }
    }

    public function createSpaceship($data): array
    {
        $response = $this->client->request('POST', self::API_URL, [
            'body' => $data
        ]);
        $statusCode = $response->getStatusCode();
        if ($statusCode == 201) {
            $content = $response->toArray();
            return $content;
        } else {
            return [];
        }
    }

    public function updateSpaceship($id, $data): array
    {
        $response = $this->client->request('PATCH', self::API_URL . '/' . $id, [
            'body' => $data
        ]);
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $content = $response->toArray();
            return $content;
        } else {
            return [];
        }
    }

    public function deleteSpaceship($id): array
    {
        $response = $this->client->request('DELETE', self::API_URL . '/' . $id);
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $content = $response->toArray();
            return $content;
        } else {
            return [];
        }
    }
}