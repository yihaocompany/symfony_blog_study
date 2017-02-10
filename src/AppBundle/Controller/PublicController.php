<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PublicController extends Controller
{

    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('AppBundle:Tag')->findAll();
        $color=['dan','live','lop','bun','jol'];
        for($i=0; $i<count($query); $i++){
            $colors[$i]=$color[rand(0,4)];
        }
        return $this->render('public/tags.html.twig', array(
            'query' => $query,
            'color' => $colors
        ));
    }
}
