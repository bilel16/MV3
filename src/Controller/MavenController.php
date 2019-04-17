<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MavenController extends AbstractController
{
    /**
     * @Route("/maven", name="maven")
     */
    public function index()
    {
        return $this->render('maven/index.html.twig', [
            'controller_name' => 'MavenController',
        ]);
    }
}
