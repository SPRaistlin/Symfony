<?php
/**
 * Created by PhpStorm.
 * User: raistlin
 * Date: 9/10/18
 * Time: 18:48
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeportesController extends Controller{


    public function inicio()
    {
        return new Response('Mi página de deportes!');
    }

    /**
     * @Route("/deportes/{section}/{page}", name="lista_paginas",
     *      requirements={"page"="\d+"},
     *      defaults={"section":"tenis"})
    */
    public function lista($page = 1,$section){
        //Simulamos una base de datos de deportes
        $sports=["futbol","tenis","rugby"];
        //Si el deporte que buscamos no se encuentra lanzamos la excepción 404 deporte no encontrado
        if(!in_array($section,$sports)){
            throw $this->createNotFoundException('Error 404 este deporte no está en nuestra Base de Datos');
        }
        return new Response(sprintf('Deportes sección: sección %s, listado de noticias página %s',$section, $page));
    }


}