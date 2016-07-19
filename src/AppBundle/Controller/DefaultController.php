<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * Get all website all information
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $site = $this->getDoctrine()
            ->getRepository('ORMBundle:Site')
            ->findAll();

        return $this->render(':default:index.html.twig', array('data' => $site));
    }

    /**
     * getOne Website information
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function getSiteAction(Request $request, $id)
    {
        if(is_numeric($id)){
        $id = intval($id);
            $site = $this->getDoctrine()
                ->getRepository('ORMBundle:Site')
                ->findOneById($id);

            return $this->render(':Template:site.html.twig', array('data' => $site));
        }
        return false;
    }
}
