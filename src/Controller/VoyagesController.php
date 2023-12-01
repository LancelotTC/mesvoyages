<?php
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of VoyagesController
 *
 * @author Work account
 */
class VoyagesController extends AbstractController {

    /**
     * 
     * @Route("/voyages", name="voyages")
     * @return Response2
     */
    public function index(): Response{
        return $this -> render("pages/voyages.html.twig");
    }
    
}
