<?php

namespace ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use ClienteBundle\Entity\Servicio;

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
     * @Route("/cliente/home", name="cliente_home")
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
    /**
     * Finds and displays a Servicio entity.
     *
     * @Route("cliente/servicio/{id}", name="cliente_servicio_show")
     * @Method("GET")
     */
    public function showAction(Servicio $servicio)
    {

        return $this->render('cliente/show.html.twig', array(
            'servicio' => $servicio,

        ));
    }
}
