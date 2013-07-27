<?php

namespace PUGAL\Bundle\Hackathon2013Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PUGALHackathon2013Bundle:Default:index.html.twig');
    }
}
