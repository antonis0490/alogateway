<?php

namespace Omnipay\Alogateway;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{


    public function getName()
    {
        return 'Alogateway';
    }

    public function getDefaultParameters()
    {
        return array(
            'AlogatewayApiId' => '',
            'AlogatewayApiPass' => '',
            'AlogatewayApiNotifyPass' => '',
            'AlogatewayWallet' => '',
            'testMode' => false,
        );
    }

    public function getAlogatewayApiId()
    {
        return $this->getParameter('AlogatewayApiId');
    }


    public function setAlogatewayApiId($value)
    {
        return $this->setParameter('AlogatewayApiId', $value);
    }


    public function getAlogatewayApiPass()
    {
        return $this->getParameter('AlogatewayApiPass');
    }


    public function setAlogatewayApiPass($value)
    {
        return $this->setParameter('AlogatewayApiPass', $value);
    }

    public function getAlogatewayApiNotifyPass()
    {
        return $this->getParameter('AlogatewayApiNotifyPass');
    }


    public function setAlogatewayApiNotifyPass($value)
    {
        return $this->setParameter('AlogatewayApiNotifyPass', $value);
    }

    public function getAlogatewayWallet()
    {
        return $this->getParameter('AlogatewayWallet');
    }


    public function setAlogatewayWallet($value)
    {
        return $this->setParameter('AlogatewayWallet', $value);
    }




    public function getToken()
    {

        return $this->getParameter('token');
    }



    /**
     * Set OAuth 2.0 access token.
     *
     * @param string $value
     * @return Gateway provides a fluent interface
     */
    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }

    /**
     * Get OAuth 2.0 access token expiry time.
     *
     * @return integer
     */
    public function getTokenExpires()
    {
        return $this->getParameter('tokenExpires');
    }

    /**
     * Set OAuth 2.0 access token expiry time.
     *
     * @param integer $value
     * @return Gateway provides a fluent interface
     */
    public function setTokenExpires($value)
    {
        return $this->setParameter('tokenExpires', $value);
    }

    /**
     * Is there a bearer token and is it still valid?
     *
     * @return bool
     */
    public function hasToken()
    {
        $token = $this->getParameter('token');


        return !empty($token);
    }

    /**
     * Create Request
     *
     * This overrides the parent createRequest function ensuring that the OAuth
     * 2.0 access token is passed along with the request data -- unless the
     * request is a RestTokenRequest in which case no token is needed.  If no
     * token is available then a new one is created (e.g. if there has been no
     * token request or the current token has expired).
     *
     * @param string $class
     * @param array $parameters
     * @return \Omnipay\Alogateway\Message\AbstractRestRequest
     */
    public function createRequest($class, array $parameters = array())
    {

        $this->getToken();


        return parent::createRequest($class, $parameters);
    }



    /**
     * Create a purchase request.
     * @param array $parameters
     * @return \Omnipay\Alogateway\Message\RestPurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Alogateway\Message\RestPurchaseRequest', $parameters);
    }

    /**
     * Create a purchase request.
     * @param array $parameters
     * @return \Omnipay\Alogateway\Message\RestPurchaseRequest
     */
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Alogateway\Message\PaymentCompleteRequest', $parameters);
    }
}
