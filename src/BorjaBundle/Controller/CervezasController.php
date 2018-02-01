<?php

namespace BorjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BorjaBundle\Entity\Cervezas;


class CervezasController extends Controller
{
    /**
     * @Route("/cervezas/{id}")
     */
    public function buscarCervezaAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Cervezas::class);
        // find *all* cervezitas
        $cervezitas = $repository->findById($id);
        return $this->render('BorjaBundle:Cervezas:all.html.twig',array("cervezas" => $cervezitas));
    }

}
