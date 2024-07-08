<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    function index(): Response
    {
        return new Response('Teste de sistema');
    }

    #[Route('/animal/{nome}/{raca}')]
    function animal(string $nome = null, string $raca = null): Response
    {
        $nome = str_replace("-"," ", $nome);
        $nome = u($nome)->title(true);

        $raca = str_replace("-"," ", $raca);
        $raca = u($raca)->title(true);

        return $this->render('/homepage/animal.html.twig', [
            'nome' => $nome,
            'raca' => $raca
        ]);
        // return new Response($nome.' - ' . uniqid());
    }
}