<?php
/**
 * Created by PhpStorm.
 * User: paolo
 * Date: 30/06/16
 * Time: 10:59
 */

namespace PageSpeed\ApiBundle\Models;

class PageSpeedModel
{
    private $key = 'AIzaSyC0OicoES7C0V2y9cgVccm5bVnRP9a15Dc';

    /**
     * GET ALL INTEL FROM THE PAGE SPEED DESKTOP
     * @param $url
     * @return mixed
     */
    public function getDataDesktop($url){
      $api = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url='.$url.'&locale=france&screenshot=true&strategy=desktop&key=' . $this->key;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
      $data = curl_exec($curl);
      curl_close($curl);
      return json_decode($data);
    }
    /**
     * GET ALL INTEL FROM THE PAGE SPEED MOBILE
     * @param $url
     * @return mixed
     */
    public function getDataMobile($url){
      $api = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url='.$url.'&locale=france&screenshot=true&strategy=mobile&key=' . $this->key;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
      $data = curl_exec($curl);
      curl_close($curl);
      return json_decode($data);
    }
    /**
     * GET ONLY THE PAGE SPEED NUMBER FROM THE PAGE SPEED DESKTOP
     * @param $url
     * @return mixed
     */
    public function getRuleGroupsMobile($url){
      $api = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url='.$url.'&fields=ruleGroups&strategy=mobile&key=' . $this->key;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
      $data = curl_exec($curl);
      curl_close($curl);
      return json_decode($data);
    }

    /**
     * GET ONLY THE PAGE SPEED NUMBER FROM THE PAGE SPEED MOBILE
     * @param $url
     * @return mixed
     */
    public function getRuleGroupsDesktop($url){
      $api = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url='.$url.'&fields=ruleGroups&strategy=desktop&key=' . $this->key;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $api);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
      $data = curl_exec($curl);
      curl_close($curl);
      return json_decode($data);
    }

    /**
     * ADD http if there is not on the url
     * @param $url
     * @return string
     */

    public function convertToHttp($url){
        if (!preg_match('/http:\/\//', $url)) {
            return 'http://' . $url;
        }
        return $url;
    }

    /**
     * LOOK FOR A PART OF THE URL AND RETURN FALSE IF THERE IS THIS PART
     * @param $url
     * @param array $template as ['preprod','pm0s']
     * @return bool
     */
    public function lookIntoURL($url, $template = array()){
        foreach($template as $item){
            $item = '/'.$item.'/';
            if(preg_match($item, $url)) {
                return false;
            }
        }
        return true;
    }

}