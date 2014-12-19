<?php

namespace drenty\inwebo;

use yii\base\Component;
use yii\helpers\Json;

class Inwebo extends \yii\base\Component
{
    public $serviceId;
    public $certFile;
    public $certPassphrase;

    public $iwApiBaseUrl = 'https://api.myinwebo.com';

    //Authentication in REST
    public function AuthenticateREST($login, $code) {

        $authUrl = $this->iwApiBaseUrl . "/FS?action=authenticateExtended&"
                . "serviceId=". $this->serviceId . "&"
                . "userId=" . $login . "&"
                . "token=" . $code . "&"
                . "format=json";

        $ch = curl_init();

        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_URL => $authUrl,
            CURLOPT_SSLCERT => $this->certFile,
            CURLOPT_SSLCERTPASSWD => $this->certPassphrase
        ];

        curl_setopt_array($ch , $options);

        $output = curl_exec($ch);
        $request_info = curl_getinfo($ch); //Récupération des infos sur la requête CURL

        if (!$output) {
            throw new NoResultException('Curl call failed', $request_info);
        } else {
            $result = Json::decode($output);
            $auth = $result['err'];
            if (substr($auth, 0, 3) == 'NOK') {
                throw new RefusedAuthenticationException($auth, $request_info, $result);
            }
        }
    }
/*
    //Send a push authentication request
    public function pushAuthenticate($login) {
        
        $pushUrl = $this->iwApiBaseUrl . "/FS?action=pushAuthenticate&"
                . "serviceId=". $this->serviceId . "&"
                . "userId=" . $login . "&"
                . "format=json";

        $ch = curl_init();

        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_URL => $pushUrl,
            CURLOPT_SSLCERT => $this->apiCertificate ,
            CURLOPT_SSLCERTPASSWD => $this->apiCertificatePassphrase
        );

        curl_setopt_array($ch , $options);

        $output = curl_exec($ch);
        $request_info = curl_getinfo($ch); //Récupération des infos sur la requête CURL

        if (!$output)    {
            $this->printError($request_info);
            return "NOK";
        } else {
            $result = json_decode($output, true);
            $this->printResult('Push authenticate result:', $result);
            return $result;
        }
    }
    
    //Check push authentication result
    public function checkPushResult($login, $sessionId) {
        
        $checkUrl = $this->iwApiBaseUrl . "/FS?action=checkPushResult&"
                . "serviceId=". $this->serviceId . "&"
                . "userId=" . $login . "&"
                . "sessionId=" . $sessionId . "&"
                . "format=json";

        $ch = curl_init();

        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_URL => $checkUrl,
            CURLOPT_SSLCERT => $this->apiCertificate ,
            CURLOPT_SSLCERTPASSWD => $this->apiCertificatePassphrase
        );

        curl_setopt_array($ch , $options);

        $output = curl_exec($ch);
        $request_info = curl_getinfo($ch); //Récupération des infos sur la requête CURL

        if (!$output)    {
            $this->printError($request_info);
            return "NOK";
        } else {
            $result = json_decode($output, true);
            $this->printResult('Check push result:', $result);
            return $result;
        }
    }
*/
}
