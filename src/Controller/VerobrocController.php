<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VerobrocController extends AbstractController
{
    /**
     * @return Response ("/verobroc", name="verobroc_index")
     */
    public function index() : response
    {
        return $this->render('verobroc/index.html.twig', [

        ]);
    }
}
