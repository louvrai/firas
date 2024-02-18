<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/home.html.twig.twig.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/test/enfant', name: 'app_test')]
    public function enfant(): Response
    {
        return $this->render('Admin/base.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}