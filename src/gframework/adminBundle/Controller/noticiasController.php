<?php

namespace gframework\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use gframework\adminBundle\Entity\noticias;
use gframework\adminBundle\Form\noticiasType;

/**
 * noticias controller.
 *
 */
class noticiasController extends Controller
{
    /**
     * Lists all noticias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $noticias = $em->getRepository('adminBundle:noticias')->findAll();
        $deleteForm = array(); 
        foreach($noticias as $noticia){
        $deleteForm[$noticia->getId()] = $noticia->getId();
        }
        
        return $this->render('adminBundle:noticias:index.html.twig', array(
            'noticias' => $noticias, 'delete_form' => $deleteForm,));
    }

    /**
     * Creates a new noticias entity.
     *
     */
    public function newAction(Request $request)
    {
        $noticia = new noticias();
        $form = $this->createForm('gframework\adminBundle\Form\noticiasType', $noticia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticia);
            $em->flush();

            return $this->redirectToRoute('noticias_show', array('id' => $noticia->getId()));
        }

        return $this->render('adminBundle:noticias:new.html.twig', array(
            'noticia' => $noticia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a noticias entity.
     *
     */
    public function showAction(noticias $noticia)
    {
        $deleteForm = $this->createDeleteForm($noticia);

        return $this->render('adminBundle:noticias:show.html.twig', array(
            'noticia' => $noticia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing noticias entity.
     *
     */
    public function editAction(Request $request, noticias $noticia)
    {
        $deleteForm = $this->createDeleteForm($noticia);
        $editForm = $this->createForm('gframework\adminBundle\Form\noticiasType', $noticia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticia);
            $em->flush();

            return $this->redirectToRoute('noticias_edit', array('id' => $noticia->getId()));
        }

        return $this->render('adminBundle:noticias:edit.html.twig', array(
            'noticia' => $noticia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a noticias entity.
     *
     */
    public function deleteAction(Request $request, noticias $noticia)
    {
        $form = $this->createDeleteForm($noticia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticia);
            $em->flush();
        }

        return $this->redirectToRoute('noticias_index');
    }

    /**
     * Creates a form to delete a noticias entity.
     *
     * @param noticias $noticia The noticias entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(noticias $noticia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticias_delete', array('id' => $noticia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function deletarAction(noticias $noticia){
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('adminBundle:noticias')->find($noticia->getId());
            $em->remove($noticia);
            $em->flush();
        return $this->redirectToRoute('noticias_index');
    }

}
