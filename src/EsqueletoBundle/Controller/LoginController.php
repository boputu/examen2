<?php

namespace EsqueletoBundle\Controller;

use EsqueletoBundle\Entity\Login;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Login controller.
 *
 * @Route("paco")
 */
class LoginController extends Controller
{
    /**
     * Lists all login entities.
     *
     * @Route("/", name="paco_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $logins = $em->getRepository('EsqueletoBundle:Login')->findAll();

        return $this->render('EsqueletoBundle:login:index.html.twig', array(
            'logins' => $logins,
        ));
    }

  
    /**
     * Finds and displays a login entity.
     *
     * @Route("/crud/{id}", name="paco_show")
     * @Method("GET")
     */
    public function showAction(Login $login)
    {
        $deleteForm = $this->createDeleteForm($login);

        return $this->render('EsqueletoBundle:login:show.html.twig', array(
            'login' => $login,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing login entity.
     *
     * @Route("/crud/{id}/edit", name="paco_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Login $login)
    {
        $deleteForm = $this->createDeleteForm($login);
        $editForm = $this->createForm('EsqueletoBundle\Form\LoginType', $login);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('paco_edit', array('id' => $login->getId()));
        }

        return $this->render('EsqueletoBundle:login:edit.html.twig', array(
            'login' => $login,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a login entity.
     *
     * @Route("/crud/{id}", name="paco_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Login $login)
    {
        $form = $this->createDeleteForm($login);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($login);
            $em->flush();
        }

        return $this->redirectToRoute('paco_index');
    }

    /**
     * Creates a form to delete a login entity.
     *
     * @param Login $login The login entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Login $login)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paco_delete', array('id' => $login->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
