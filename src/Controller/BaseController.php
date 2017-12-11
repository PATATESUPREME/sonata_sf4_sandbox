<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends Controller {

    /**
     * Function: home().
     *
     * @route("/")
     */
    public function home() {
        return $this->render('base.html.twig');
    }
}