<?php

namespace LeaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzonCloverAction()
    {
        return $this->render('LeaderBoardBundle:CrimzonClover:index.html.twig');
    }
    public function crimzonCloverTypeAction($type)
    {
        $type = ['type' => $type];
        return $this->render('LeaderBoardBundle:CrimzonClover:index.html.twig', $type);
    }
    public function ikarugaAction()
    {
        return $this->render('LeaderBoardBundle:Ikaruga:index.html.twig');
    }
    public function ikarugaBgAction($bg)
    {
        $bg = ['bg' => $bg];
        return $this->render('LeaderBoardBundle:Ikaruga:index.html.twig', $bg);
    }
}
