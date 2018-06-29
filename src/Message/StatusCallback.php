<?php
namespace Omnipay\Alogateway\Message;

use Omnipay\Common\Message\AbstractResponse;


class StatusCallback extends AbstractResponse
{
    const STATUS_SUCCESSFUL = 'a0';
    const STATUS_DECLINED = 'declined';
    const STATUS_ERROR = 'error';
    const STATUS_PENDING = 'tr12';
    const STATUS_FILTERED = 'filtered';

    public function __construct(array $post)
    {
        $this->data = $post;
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_SUCCESSFUL ? true : false);
    }

    /**
     * @return bool
     */
    public function isDeclined()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_DECLINED ? true : false);
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return (mb_strtolower($this->getError()) == 1 ? true : false);
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_PENDING ? true : false);
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return (mb_strtolower($this->getStatus()) == self::STATUS_EXPIRED ? true : false);
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->data['error'];
    }

    public function getComment()
    {
        return $this->data['message'];
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->getComment();
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->data['command'];
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->data['status'];
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->data['amount'];
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->data['ccy'];
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->data['user'];
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->data['orderid'];
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->data['bill_id'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->data['name'];
    }

    /**
     * @return bool
     */
    public function orderidFilled()
    {
        return ($this->data['transactionid'] != '' ? true : false);
    }


    /**
     * @return string
     */
    public function getResponseChecksum($secret_word)
    {
        $concat = $this->data["transactionid"].$this->data["merchant_order"].$this->data["amount"];
        $concat .= $this->data["currency"].$this->data["bank_transactionid"].$this->data["status"];
        return $concat;
    }

    /**
     * @param $hex
     * @return string
     */
    public function HexToStr($hex)
    {
        $string = "";
        for ($i = 0; $i < mb_strlen($hex) - 1; $i += 2)
            $string .= chr(hexdec($hex[$i].$hex[$i+1]));
        return($string);
    }

    /**
     * @param $secret_word
     * @param $concat
     * @return string
     */
    public function CalculateChecksum($secret_word, $concat){

        $signature = hash_hmac("sha1", $concat, $secret_word);
        return $signature;
    }

    /**
     * @param $secret_word
     * @return bool
     */
    public function ValidChecksum($secret_word){
        $concat = $this->getResponseChecksum($secret_word);
        $checkSum = $this->CalculateChecksum($secret_word, $concat);
        if (mb_strtolower($checkSum) == mb_strtolower($this->data['control'])){
            return true;
        }
        return false;
    }
}
