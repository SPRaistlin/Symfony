<?php
/**
 * Created by PhpStorm.
 * User: raistlin
 * Date: 9/10/18
 * Time: 18:48
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class DeportesController {
    public function inicio(){
        return new Response('Mi primera página en Symfony!');
    }
}