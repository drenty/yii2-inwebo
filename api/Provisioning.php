<?php
/**
 * Provisioning class file
 * 
 * @author    Emmanuel NINET
 * @copyright 2014 inWebo Technologies
 * @package   PHP API Samples
 */

namespace drenty\inwebo\api;

class Provisioning extends \SoapClient {

  public function Provisioning($wsdl = "Provisioning.wsdl", $options = array()) {
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param loginsQueryByGroup $parameters
   * @return loginsQueryByGroupResponse
   */
  public function loginsQueryByGroup(loginsQueryByGroup $parameters) {
    return $this->__call('loginsQueryByGroup', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginsQuery $parameters
   * @return loginsQueryResponse
   */
  public function loginsQuery(loginsQuery $parameters) {
    return $this->__call('loginsQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginSearch $parameters
   * @return loginSearchResponse
   */
  public function loginSearch(loginSearch $parameters) {
    return $this->__call('loginSearch', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginQuery $parameters
   * @return loginQueryResponse
   */
  public function loginQuery(loginQuery $parameters) {
    return $this->__call('loginQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginCreate $parameters
   * @return loginCreateResponse
   */
  public function loginCreate(loginCreate $parameters) {
    return $this->__call('loginCreate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginUpdate $parameters
   * @return loginUpdateResponse
   */
  public function loginUpdate(loginUpdate $parameters) {
    return $this->__call('loginUpdate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginRestore $parameters
   * @return loginRestoreResponse
   */
  public function loginRestore(loginRestore $parameters) {
    return $this->__call('loginRestore', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPwd $parameters
   * @return loginResetPwdResponse
   */
  public function loginResetPwd(loginResetPwd $parameters) {
    return $this->__call('loginResetPwd', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPwdExtended $parameters
   * @return loginResetPwdExtendedResponse
   */
  public function loginResetPwdExtended(loginResetPwdExtended $parameters) {
    return $this->__call('loginResetPwdExtended', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginAddDevice $parameters
   * @return loginAddDeviceResponse
   */
  public function loginAddDevice(loginAddDevice $parameters) {
    return $this->__call('loginAddDevice', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginDeleteTool $parameters
   * @return loginDeleteToolResponse
   */
  public function loginDeleteTool(loginDeleteTool $parameters) {
    return $this->__call('loginDeleteTool', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginDelete $parameters
   * @return loginDeleteResponse
   */
  public function loginDelete(loginDelete $parameters) {
    return $this->__call('loginDelete', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginSendByMail $parameters
   * @return loginSendByMailResponse
   */
  public function loginSendByMail(loginSendByMail $parameters) {
    return $this->__call('loginSendByMail', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginActivateCode $parameters
   * @return loginActivateCodeResponse
   */
  public function loginActivateCode(loginActivateCode $parameters) {
    return $this->__call('loginActivateCode', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginResetPINErrorCounter $parameters
   * @return loginResetPINErrorCounterResponse
   */
  public function loginResetPINErrorCounter(loginResetPINErrorCounter $parameters) {
    return $this->__call('loginResetPINErrorCounter', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param IWDS_check $parameters
   * @return IWDS_checkResponse
   */
  public function IWDS_check(IWDS_check $parameters) {
    return $this->__call('IWDS_check', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param serviceGroupsQuery $parameters
   * @return serviceGroupsQueryResponse
   */
  public function serviceGroupsQuery(serviceGroupsQuery $parameters) {
    return $this->__call('serviceGroupsQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountQuery $parameters
   * @return groupAccountQueryResponse
   */
  public function groupAccountQuery(groupAccountQuery $parameters) {
    return $this->__call('groupAccountQuery', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountCreate $parameters
   * @return groupAccountCreateResponse
   */
  public function groupAccountCreate(groupAccountCreate $parameters) {
    return $this->__call('groupAccountCreate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountUpdate $parameters
   * @return groupAccountUpdateResponse
   */
  public function groupAccountUpdate(groupAccountUpdate $parameters) {
    return $this->__call('groupAccountUpdate', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param groupAccountDelete $parameters
   * @return groupAccountDeleteResponse
   */
  public function groupAccountDelete(groupAccountDelete $parameters) {
    return $this->__call('groupAccountDelete', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param loginGetGroups $parameters
   * @return loginGetGroupsResponse
   */
  public function loginGetGroups(loginGetGroups $parameters) {
    return $this->__call('loginGetGroups', array(
            new \SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://console.inwebo.com',
            'soapaction' => ''
           )
      );
  }

}

