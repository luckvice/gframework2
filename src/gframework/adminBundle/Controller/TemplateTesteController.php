<?php

namespace gframework\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
define('TESTE_APP','teste');
class TemplateTeste extends Controller
{
    public function indexAction()
    {
        return $this->render('adminBundle:pages:form.html.twig', array('nome'=>TESTE_APP));
    }
}


