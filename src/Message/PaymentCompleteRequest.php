<?php

namespace Omnipay\Alogateway\Message;

use Omnipay\Common\Exception\InvalidResponseException;
use Omnipay\Common\Message\AbstractRequest;


class PaymentCompleteRequest extends AbstractRequest
{
    public $liveEndpoint = 'https://payment.cdc.alogateway.co/ChinaDebitCard';
    protected $sandboxEndpoint = '';

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return ((bool)$this->getTestMode()) ? $this->sandboxEndpoint : $this->liveEndpoint;
    }

    /**
     * @return mixed
     */
    public function getClientOrderid()
    {
        return $this->getParameter('client_orderid');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setClientOrderid($value)
    {
        return $this->setParameter('client_orderid', $value);
    }

    /**
     * @return mixed
     */
    public function getAlogatewayMerchant()
    {
        return $this->getParameter('alogateway_merchant');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAlogatewayMerchant($value)
    {
        return $this->setParameter('alogateway_merchant', $value);
    }

    /**
     * @return mixed
     */
    public function getAlogatewaySecret()
    {
        return $this->getParameter('alogateway_secret');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAlogatewaySecret($value)
    {
        return $this->setParameter('alogateway_secret', $value);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->getParameter('first_name');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setFirstName($value)
    {
        return $this->setParameter('first_name', $value);
    }

    /**
     *
     * @return mixed
     */
    public function getApiVersion()
    {
        return $this->getParameter('apiversion');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setApiVersion($value)
    {
        return $this->setParameter('apiversion', $value);
    }

    /**
     *
     * @return mixed
     */
    public function getVersion()
    {
        return $this->getParameter('version');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setVersion($value)
    {
        return $this->setParameter('version', $value);
    }

    /**
     *
     * @return mixed
     */
    public function getMerchantAccount()
    {
        return $this->getParameter('merchant_account');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setMerchantAccount($value)
    {
        return $this->setParameter('merchant_account', $value);
    }

    /**
     *
     * @return mixed
     */
    public function getMerchantOrder()
    {
        return $this->getParameter('merchant_order');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setMerchantOrder($value)
    {
        return $this->setParameter('merchant_order', $value);
    }

    /**
     *
     * @return mixed
     */
    public function getMerchantProductDesc()
    {
        return $this->getParameter('merchant_product_desc');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setMerchantProductDesc($value)
    {
        return $this->setParameter('merchant_product_desc', $value);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->getParameter('last_name');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setLastName($value)
    {
        return $this->setParameter('last_name', $value);
    }

    /**
     * @return mixed
     */
    public function getServerReturnUrl()
    {
        return $this->getParameter('server_return_url');

    }

    /**
     * @param $value
     * @return mixed
     */
    public function setServerReturnUrl($value)
    {
        return $this->setParameter('server_return_url', $value);
    }

    /**
     * @return mixed
     */
    public function getIpaddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setIpaddress($value)
    {
        return $this->setParameter('ipaddress', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderDesc()
    {
        return $this->getParameter('order_desc');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setOrderDesc($value)
    {
        return $this->setParameter('order_desc', $value);
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->getParameter('address1');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAddress1($value)
    {
        return $this->setParameter('address1', $value);
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->getParameter('description');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDescription($value)
    {
        return $this->setParameter('description', $value);
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    /**
     * @return mixed
     */
    public function getBankcode()
    {
        return $this->getParameter('bankcode');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setBankcode($value)
    {
        return $this->setParameter('bankcode', $value);
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->getParameter('city');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCity($value)
    {
        return $this->setParameter('city', $value);
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->getParameter('zip_code');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setZipCode($value)
    {
        return $this->setParameter('zip_code', $value);
    }

    /**
     * @return mixed
     */
    public function getSuccessUrl()
    {
        return $this->getParameter('success_url');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setSuccessUrl($value)
    {
        return $this->setParameter('success_url', $value);
    }

    /**
     * @return mixed
     */
    public function getDeclineUrl()
    {
        return $this->getParameter('decline_url');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDeclineUrl($value)
    {
        return $this->setParameter('decline_url', $value);
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->getParameter('cancel_url');
    }

    /**
     * @param $value
     * @return mixed.
     */
    public function setCancelUrl($value)
    {
        return $this->setParameter('cancel_url', $value);
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->getParameter('header');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setHeader($value)
    {
        return $this->setParameter('header', $value);
    }

    /**
     * @return mixed
     */
    public function getChannelCode()
    {
        return $this->getParameter('channelCode');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setChannelCode($value)
    {
        return $this->setParameter('channelCode', $value);
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->getParameter('secret');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setSecret($value)
    {
        return $this->setParameter('secret', $value);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setOrderTime($value)
    {
        return $this->setParameter('orderTime', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderTime()
    {
        return $this->getParameter('orderTime');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setReturnUrl($value)
    {
        return $this->setParameter('return_url', $value);
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->getParameter('return_url');
    }

    /**
     * @return array
     */
    public function getToken()
    {
        return $this->getParameter('token');

    }


    /**
     * @param $value
     * @return mixed
     */
    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }


    /**
     * @return array
     */
    public function getData()
    {

        $concat = $this->getAlogatewayMerchant() . ($this->getAmount() * 100) . $this->getCurrency() . $this->getFirstName() . $this->getLastName() . $this->getAddress1() . $this->getCity();
        $concat .= $this->getZipCode() . $this->getCountry() . $this->getPhone() . $this->getEmail() . $this->getClientOrderid() . $this->getDescription() . $this->getSuccessUrl();

        $control = hash_hmac("sha1", $concat, $this->getAlogatewaySecret());


        $input = array
        (

            "body" => array
            (
                "apiversion" => 3,
                "version" => 11,
                "merchant_account" => $this->getAlogatewayMerchant(),
                "merchant_order" => $this->getClientOrderid(),
                "merchant_product_desc" => $this->getDescription(),
                "first_name" => $this->getFirstName(),
                "last_name" => $this->getLastName(),
                "address1" => $this->getAddress1(),
                "city" => $this->getCity(),
                "zip_code" => $this->getZipCode(),
                "country" => $this->getCountry(),
                "phone" => $this->getPhone(),
                "email" => $this->getEmail(),
                "amount" => $this->getAmount() * 100,
                "currency" => $this->getCurrency(),
                "bankcode" => "LBT",
                "ipaddress" => $this->getIpaddress(),
                "return_url" => $this->getSuccessUrl(),
                "server_return_url" => $this->getServerReturnUrl(),
                "control" => $control
            )
        );

        $encoded = json_encode($input);

        $form = '<form name="cupForm" id="cupForm" action="https://payment.cdc.alogateway.co/ChinaDebitCard" method="POST">
        <input type="hidden" name="apiversion" value="'.$input["body"]["apiversion"].'" />
        <input type="hidden" name="version" value="'.$input["body"]["version"].'" />
        <input type="hidden" name="merchant_account" value="'.$input["body"]["merchant_account"].'" />
        <input type="hidden" name="merchant_order" value="'.$input["body"]["merchant_order"].'" />
        <input type="hidden" name="merchant_product_desc" value="'.$input["body"]["merchant_product_desc"].'" />
        <input type="hidden" name="first_name" value="'.$input["body"]["first_name"].'" />
        <input type="hidden" name="last_name" value="'.$input["body"]["last_name"].'" />
        <input type="hidden" name="address1" value="'.$input["body"]["address1"].'" />
        <input type="hidden" name="city" value="'.$input["body"]["city"].'" />
        <input type="hidden" name="zip_code" value="'.$input["body"]["zip_code"].'" />
        <input type="hidden" name="country"  value="'.$input["body"]["country"].'" />
        <input type="hidden" name="phone"  value="'.$input["body"]["phone"].'" />
        <input type="hidden" name="email"  value="'.$input["body"]["email"].'" />
        <input type="hidden" name="amount"  value="'.$input["body"]["amount"].'" />
        <input type="hidden" name="currency"  value="'.$input["body"]["currency"].'" />
        <input type="hidden" name="bankcode"  value="'.$input["body"]["bankcode"].'" />
        <input type="hidden" name="ipaddress"  value="'.$input["body"]["ipaddress"].'" />
        <input type="hidden" name="return_url"  value="'.$input["body"]["return_url"].'" />
        <input type="hidden" name="server_return_url"  value="'.$input["body"]["server_return_url"].'" />
        <input type="hidden" name="control"  value="'.$input["body"]["control"].'" />
        </form>
        <script language="JavaScript">
                document.getElementById("cupForm").submit();
        </script>';

        return $form;
    }


    /**
     * Get HTTP Method.
     *
     * This is nearly always POST but can be over-ridden in sub classes.
     *
     * @return string
     */
    protected function getHttpMethod()
    {
        return 'POST';
    }

    protected function createResponse($data)
    {
        return $this->response = new \Omnipay\alogateway\Message\PaymentResponse($this, $data);
    }

    /**
     * @param int $options http://php.net/manual/en/json.constants.php
     * @return string
     */
    public function toJSON($data, $options = 0)
    {

        return $encoded = json_encode($data);

    }


    /**
     * @param $data
     * @return PaymentResponse
     */
    public function sendData($data)
    {

        // don't throw exceptions for 4xx errors
        $this->httpClient->getEventDispatcher()->addListener(
            'request.error',
            function ($event) {
                if ($event['response']->isClientError()) {
                    $event->stopPropagation();
                }
            }
        );

        // Guzzle HTTP Client createRequest does funny things when a GET request
        // has attached data, so don't send the data if the method is GET.
        if ($this->getHttpMethod() == 'GET') {
            $httpRequest = $this->httpClient->createRequest(
                $this->getHttpMethod(),
                $this->getEndpoint() . '?' . http_build_query($data),
                array(
                    'Content-type' => 'application/json',
                )
            );
        } else {


            $curl = curl_init($this->getEndpoint());
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data['body']);
        }

        try {

//            $output = curl_exec($curl);
            curl_close($curl);

//            $answer = array();
//            parse_str($output, $answer);

//            $httpRequest->getCurlOptions()->set(CURLOPT_POSTFIELDS, http_build_query($data['body']) );
//            $httpRequest->getCurlOptions()->set(CURLOPT_POST, true);
//            $httpRequest->getCurlOptions()->set(CURLOPT_RETURNTRANSFER, true);
//
//            $httpResponse = $httpRequest->send();
//            // Empty response body should be parsed also as and empty array
//            $body = $httpResponse->getBody(true);
            return $this->response = $this->createResponse($data);


        } catch (\Exception $e) {
            throw new InvalidResponseException(
                'Error communicating with payment gateway: ' . $e->getMessage(),
                $e->getCode()
            );

        }

    }
}
