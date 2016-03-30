<?php

namespace gframework\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
define('TESTE_APP','teste');
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('adminBundle:Home:index.html.twig', array('nome'=>TESTE_APP));
    }
}


