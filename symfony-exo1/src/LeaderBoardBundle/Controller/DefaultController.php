<?php

namespace LeaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeaderBoardBundle:Default:index.html.twig');
    }
}
