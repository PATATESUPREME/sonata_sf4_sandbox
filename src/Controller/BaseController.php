<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller
{

    /**
     * Function: home().
     *
     * @Route("/", name="homepage")
     */
    public function homepageAction()
    {
        return $this->render('base.html.twig');
    }
}
