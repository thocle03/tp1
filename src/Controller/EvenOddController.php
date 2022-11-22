<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EvenOddController extends AbstractController {

    /**
     * @Route("/", name="coucou")
     */
    public function coucou(Request $request): Response {
        return $this->render('/even_odd.html.twig', [
            'numbers' => [1, 2, 3, 4, 5, 6],
            'min' => min([1, 2, 3, 4, 5, 6]),
            'max' => max([1, 2, 3, 4, 5, 6]),
            'size' => sizeof([1, 2, 3, 4, 5, 6]),
        ]);
    }
}