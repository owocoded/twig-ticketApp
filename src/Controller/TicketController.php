<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('landing.html.twig');
    }

    #[Route('/auth/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }

    #[Route('/auth/signup', name: 'app_signup')]
    public function signup(): Response
    {
        return $this->render('signup.html.twig');
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('dashboard.html.twig');
    }

    #[Route('/tickets', name: 'app_tickets')]
    public function tickets(): Response
    {
        return $this->render('tickets.html.twig');
    }
}