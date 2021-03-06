<?php
/**
 * Authentication class file
 * 
 * @author    Emmanuel NINET
 * @copyright 2014 inWebo Technologies
 * @package   PHP API Samples
 */

namespace drenty\inwebo\api;

class Authentication extends \SoapClient {

  public function Authentication($wsdl = "Authentication.wsdl", $options = array()) {
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param Authenticate $parameters
   * @return AuthenticateResponse
   */
  public function Authenticate(Authenticate $parameters) {
    return $this->__call('Authenticate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://service.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param AuthenticateWithIp $parameters
   * @return AuthenticateWithIpResponse
   */
  public function AuthenticateWithIp(AuthenticateWithIp $parameters) {
    return $this->__call('AuthenticateWithIp', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://service.inwebo.com',
            'soapaction' => ''
           )
      );
  }

}

