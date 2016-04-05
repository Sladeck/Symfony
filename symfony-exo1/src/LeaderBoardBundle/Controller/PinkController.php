<?php

namespace LeaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathsmilesAction()
    {
        return $this->render('LeaderBoardBundle:Deathsmiles:index.html.twig');
    }
    public function mushihimesamaAction()
    {
        return $this->render('LeaderBoardBundle:Mushihimesama:index.html.twig');
    }
}
