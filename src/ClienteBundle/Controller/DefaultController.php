<?php

namespace ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ClienteBundle:Default:index.html.twig');
    }

    /**
     * @Route("/cliente/home")
     */
    public function homeAction()
    {
        $user = $this->getUser();
        $userId = $user->getId();

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
        'SELECT p
        FROM ClienteBundle:Servicio p
        WHERE p.cliente = :price'
        )->setParameter('price', $userId);

        $products = $query->getResult();
      

        return $this->render('ClienteBundle:Default:home.html.twig', array(
            'servicios' => $products,
            'usuario' => $user,
        ));



    }
}
