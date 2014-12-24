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

    protected $authentication;
    protected $provisioning;

    public function init()
    {
        $this->authentication = new api\Authentication(__DIR__ . '/api/Authentication.wsdl', [
            'local_cert' => $this->certFile,
            'passphrase' => $this->certPassphrase
        ]);


        $this->provisioning = new api\Provisioning(__DIR__ . '/api/Provisioning.wsdl', [
            'local_cert' => $this->certFile, 
            'passphrase' => $this->certPassphrase
        ]);
    }

    //Authentication in REST
    public function AuthenticateREST($login, $code)
    {

        $authUrl = $this->iwApiBaseUrl . "/FS?action=authenticateExtended&"
                . "serviceId=". $this->serviceId . "&"
                . "userId=" . $login . "&"
                . "token=" . $code . "&"
                . "format=json";

        $ch = curl_init();

        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_URL => $authUrl,
            CURLOPT_SSLCERT => $this->certFile,
            CURLOPT_SSLCERTPASSWD => $this->certPassphrase
        ];

        curl_setopt_array($ch, $options);

        $output = curl_exec($ch);
        $request_info = curl_getinfo($ch);

        if (!$output) {
            throw new NoResultException('Curl call failed', $request_info);
        } else {
            $result = Json::decode($output);    
            $auth = $result['err'];
            if (substr($auth, 0, 3) == 'NOK') {
                throw new RefusedAuthenticationException($auth, $request_info, $result);
            }
        }

        return $result;
    }

    //Create a new user
    public function loginCreate($username, $email, $firstname, $lastname)
    {    
        //try { 
        $x = new API\loginCreate;
        $x->userid = 0;
        $x->serviceid = $this->serviceId;
        
        $x->login = $username; //mandatory
        $x->firstname = $firstname; //optional
        $x->name = $lastname; //optional
        $x->mail = $email; //optional, but required if codetype = 2
        
        $x->phone = ''; //optional
        $x->status = 0; //user is not blocked. If status=1, authentication requests for this user will be rejected
        $x->role = 0; //user has a user role. 0: user, 1: manager, 2: administrator
        $x->access = 1;
        $x->codetype = 0; // 0, 1 or 2
        $x->lang = 'en'; // fr or en
        $x->extrafields = Json::encode([]); //leave empty
        
        $resp = $this->provisioning->loginCreate($x);
        $res = $resp->loginCreateReturn;
        /*
        } catch (\Exception $error) {
            $this->printError($error);
            return "NOK";
        }*/
        //$this->printError($res);
        return $res;
    }
/*    //Send a push authentication request
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
