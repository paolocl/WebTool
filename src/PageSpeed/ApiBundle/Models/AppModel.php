<?php
/**
 * Created by PhpStorm.
 * User: paolo
 * Date: 30/06/16
 * Time: 16:41
 */

namespace PageSpeed\ApiBundle\Models;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppModel extends Controller
{
    public function runCrawl(){
        $result = [];
        $repository = $this->getDoctrine()
            ->getRepository('ORMBundle:Site');

        $query = $repository->createQueryBuilder('site')
            ->select('site.url')
            ->getQuery();

        $sites = $query->getResult();

        $pageSpeedModel = new PageSpeedModel();
        foreach($sites as $url){
            if(!preg_match('/pm0s/', $url['url']) && !preg_match('/pm1s/', $url['url']) && !preg_match('/recette/', $url['url']) && !preg_match('/tests/', $url['url']) && !preg_match('/preprod/', $url['url'])) {
                if (!preg_match('/http:\/\//', $url['url'])) {
                    $url['url'] = 'http://' . $url['url'];
                    $dataDesktop = $pageSpeedModel->getRuleGroupsDesktop($url['url']);
                    $dataMobile = $pageSpeedModel->getRuleGroupsMobile($url['url']);
                    if (isset($dataDesktop->ruleGroups->SPEED->score) && isset($dataMobile->ruleGroups->SPEED->score)) {
                        $result[$url['url']] = [
                            'desktop' => $dataDesktop->ruleGroups->SPEED->score,
                            'mobile' => $dataMobile->ruleGroups->SPEED->score,
                        ];
                    }
                }
            }
        }
        return $result;
    }
}