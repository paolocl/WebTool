<?php

namespace PageSpeed\ApiBundle\Controller;

use ORMBundle\Entity\PageSpeed;
use ORMBundle\Entity\TemporaryUrl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use PageSpeed\ApiBundle\Models\PageSpeedModel;
use Symfony\Component\Finder\Finder;

class DefaultController extends Controller
{

    //TODO: set the local
    public function indexAction()
    {
        return $this->render('PageSpeedApiBundle:Default:index.html.twig');
    }

    /**
     * GET RESULT FROM A SIMPLE URL
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */

    public function resultAction(Request $request)
    {
        $url = $request->request->get('url');
        if($url == null){
            return $this->redirect($this->generateUrl('page_speed_api_homepage'));
        }
        $pageSpeedModel = new PageSpeedModel();
        $dataMobile = $pageSpeedModel->getDataMobile($url);
        $dataDesktop = $pageSpeedModel->getDataDesktop($url);

        return $this->render('PageSpeedApiBundle:Default:index.html.twig', array('dataMobile' => $dataMobile, 'dataDesktop' => $dataDesktop));
    }

    /**
     * Crawl all website FROM DATABASE AND REGISTER IN DATABASE
     * @return \Symfony\Component\HttpFoundation\Response
     */

    //TODO: mettre dans model

    public function crawlForResultAction(){
        $result = [];
        $repository = $this->getDoctrine()
                    ->getRepository('ORMBundle:Site');

        $query = $repository->createQueryBuilder('urls')
            ->select(array('urls.url', 'urls.idSite'))
            ->getQuery();

        $sites = $query->getResult();

        $pageSpeedModel = new PageSpeedModel();
        $template = array('pm0s','pm1s','recette','tests','preprod');
        $currentTime = time();

        foreach($sites as $url){
            if($pageSpeedModel->lookIntoURL($url['url'], $template)) {

                $url['url'] = $pageSpeedModel->convertToHttp($url['url']);
                //TODO : CREATE FUNCTION IN PageSpeedMODEL (result array ou false, If responseCode != 200


                $dataDesktop = $pageSpeedModel->getRuleGroupsDesktop($url['url']);
                $dataMobile = $pageSpeedModel->getRuleGroupsMobile($url['url']);



                if (isset($dataDesktop->ruleGroups->SPEED->score) && isset($dataMobile->ruleGroups->SPEED->score)) {

                    $repository = $this->getDoctrine()
                        ->getRepository('ORMBundle:PageSpeed');

                    $query = $repository->createQueryBuilder('p')
                            ->where('p.idSite = :idSite')
                            ->setParameter('idSite', $url['idSite'])
                            ->getQuery();

                    $site = $query->getResult();

                    if(empty($site)){

                        //TODO : CREATE FUNCTION IN APPMODEL

                        $pageSpeed = new PageSpeed();
                        $pageSpeed->setIdSite($url['idSite']);
                        $pageSpeed->setDesktop($dataDesktop->ruleGroups->SPEED->score);
                        $pageSpeed->setMobile($dataMobile->ruleGroups->SPEED->score);
                        $pageSpeed->setLastUpdate($currentTime);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($pageSpeed);
                        $em->flush();
                    }else{

                        //TODO : CREATE FUNCTION IN APPMODEL
                        $em = $this->getDoctrine()->getManager();
                        $entry = $em->getRepository('ORMBundle:PageSpeed')->find($url['idSite']);
                        if($entry != null){
                            $oldDesktop = $entry->getDesktop();
                            $oldMobile = $entry->getMobile();
                            $entry->setOldDesktop($oldDesktop);
                            $entry->setOldMobile($oldMobile);
                            $entry->setLastUpdate($currentTime);
                            $entry->setDesktop($dataDesktop->ruleGroups->SPEED->score);
                            $entry->setMobile($dataMobile->ruleGroups->SPEED->score);
                            $em->flush();
                        }
                    }
                }
            }
        }

        return $this->render('PageSpeedApiBundle:Table:table.html.twig');
    }

    /**
     * CRAWL URL FROM A JSON FILE {[
     *          "URL" => "http://ksdfksjdf.fr
     * ]}
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function seoToolAction(Request $request){
        $finder = new Finder();
        $finder->files()->in('doc');

        foreach ($finder as $file) {
            if(preg_match('/.json/', $file->getRealpath())){
                // Dump the absolute path
                $find = json_decode(file_get_contents($file->getRealpath()));
            }
        }
        if(isset($find)){
            $pageSpeedModel = new PageSpeedModel();
            foreach($find as $url) {
                if (!preg_match('/http:\/\//', $url->URL)) {
                    $url->URL = 'http://' . $url->URL;
                }

    //            $dataDesktop = $pageSpeedModel->getRuleGroupsDesktop($url->URL);
    //            $dataMobile = $pageSpeedModel->getRuleGroupsMobile($url->URL);

                $temporary = new TemporaryUrl();
                $temporary->setUrl($url->URL);
    //            $temporary->setDesktop($dataDesktop->ruleGroups->SPEED->score);
    //            $temporary->setMobile($dataMobile->ruleGroups->SPEED->score);
                $em = $this->getDoctrine()->getManager();
                $em->persist($temporary);
                $em->flush();
            }

            return $this->render('PageSpeedApiBundle:Default:index.html.twig', array('file' => $find));
        }
        return $this->render('PageSpeedApiBundle:Default:index.html.twig');
        //TODO RENDER in table
    }

    /**
     * CRAWL THE TEMPORARY TABLE WHERE THE DOC WHERE SAVE
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function crawlTemporaryAction(){
        $result = [];
        $repository = $this->getDoctrine()
            ->getRepository('ORMBundle:TemporaryUrl');

        $query = $repository->createQueryBuilder('temporaryUrl')
            ->select(array('temporaryUrl.url', 'temporaryUrl.id'))
            ->getQuery();

        $sites = $query->getResult();

        $pageSpeedModel = new PageSpeedModel();

        foreach($sites as $url){

                $url['url'] = $pageSpeedModel->convertToHttp($url['url']);
                //TODO : CREATE FUNCTION IN PageSpeedMODEL (result array ou false, If responseCode != 200

                $dataDesktop = $pageSpeedModel->getRuleGroupsDesktop($url['url']);
                $dataMobile = $pageSpeedModel->getRuleGroupsMobile($url['url']);



                if (isset($dataDesktop->ruleGroups->SPEED->score) && isset($dataMobile->ruleGroups->SPEED->score)) {

                    $repository = $this->getDoctrine()
                        ->getRepository('ORMBundle:TemporaryUrl');


                        //TODO : CREATE FUNCTION IN APPMODEL

                        $em = $this->getDoctrine()->getManager();
                        $entry = $em->getRepository('ORMBundle:TemporaryUrl')->find($url['id']);
                        $entry->setDesktop($dataDesktop->ruleGroups->SPEED->score);
                        $entry->setMobile($dataMobile->ruleGroups->SPEED->score);
                        $em->flush();

                }
            }


        //TODO RENDER IN TABLE
        return $this->render('PageSpeedApiBundle:Table:table.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function tableAction(){

        $repository = $this->getDoctrine()->getManager();

        $query = $repository->createQuery('SELECT p.desktop, p.mobile, p.oldMobile, p.oldDesktop, s.url, p.lastUpdate FROM ORMBundle:PageSpeed p INNER JOIN ORMBundle:Urls s WITH p.idSite = s.id ORDER BY s.url ASC');

        $site = $query->getResult();

        return $this->render('PageSpeedApiBundle:Table:table.html.twig', array('data' => $site));

    }
}
