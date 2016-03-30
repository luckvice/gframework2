<?php

namespace gframework\adminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuariosController extends Controller
{

    public function indexAction()
    {
        return $this->render('adminBundle:pages:form.html.twig');
    }
}
