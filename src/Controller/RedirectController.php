<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    /**
     * @Route("/redirect", name="index")
     */
    public function index(SessionInterface $session): Response
    {
        $session->set("favoris", 58);
        return $this->redirectToRoute(
            "app_lucky_number",
            [
                'min' => 50,
                'max' => 70,
            ]
        );
        
    }
}
