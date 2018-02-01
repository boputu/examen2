<?php

namespace EsqueletoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EsqueletoBundle\Form\LoginType;
use EsqueletoBundle\Form\LoginTypemalo;
use EsqueletoBundle\Entity\Usuario;
use EsqueletoBundle\Entity\Cartas;
use Symfony\Component\HttpFoundation\Request;
use EsqueletoBundle\Entity\Login;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class DefaultController extends Controller
{

  /**
   * @Route("/register", name="register")
   */
  public function registerAction(Request $request)
    {
        // 1) build the form
        $usuario = new Login();
        $form = $this->createForm(LoginTypemalo::class, $usuario);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);

            // 4) save the User!
            $roles = ["ROLE_ADMIN"];
            $usuario->setRoles($roles);
            $DB = $this->getDoctrine()->getManager();
            $DB->persist($usuario);
            $DB->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('home');
        }
        return $this->render('EsqueletoBundle:Default:register.html.twig',array('form' => $form->createView()));
    }


    /**
     * @Route("/ranking", name="ranking")
     */
    public function rankingAction()
    {
        $repository = $this->getDoctrine()->getRepository('EsqueletoBundle:Usuario');
        $clash = $repository->findAll();
          return $this->render('EsqueletoBundle:Default:ranking.html.twig',array("royale"=>$clash));
    }

    /**
     * @Route("/home", name="home")
     */
    public function indexAction()
    {
        return $this->render('EsqueletoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return $this->render('EsqueletoBundle:Default:index.html.twig');
    }




    /**
     * @Route("/cards", name="cards")
     */
    public function cardsAction()
    {
      $repository = $this->getDoctrine()->getRepository('EsqueletoBundle:Cartas');
      $clash = $repository->findAll();
        return $this->render('EsqueletoBundle:Default:cards.html.twig',array("royale"=>$clash));
    }


}
