<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Oh ciao be<b>LLLLLLLL</b>');
    }
}