<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class HelloController
{
    #[Route('/')]
    function index(): Response
    {
        return new Response('Teste de sistema');
    }

    #[Route('/dinossauro')]
    function dinossauro(): Response
    {
        return new Response('dinossauro ' . uniqid());
    }

    #[Route('/mamiferos')]
    function mamiferos(): Response
    {
        return new Response('mamiferos ' . uniqid());
    }
}