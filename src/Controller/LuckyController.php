<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController {
    /**
     * @Route("/lucky")
     */
    public function number(Request $request, SessionInterface $session): Response {
        $favoris=$session->get("favoris");
        $this->addFlash("notice", "C'est bien votre nombre favoris ?");

        $max = $request->query->get("max"); // $min = $_GET["max"]
        $min = $request->query->get("min");

        if (!$min || !$max) {
            throw $this->createNotFoundException("Il n'y a pas d'attribut min ou max dans l'URL");
        }
        $number = random_int($min, $max);
        return $this->render("lucky/number.html.twig", [
            'number' => $number,
            'min' => $min,
            'max' => $max,
            'favoris' => $favoris,
        ]);
    }
}
