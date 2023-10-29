<?php

namespace MessageWay\MessageWayLaravel;

use Exception;
use MessageWay\Api\MessageWayAPI;

class MessageWayLaravel extends MessageWayAPI
{

    /**
     * @return MessageWayLaravel
     */
    public static function getInstance(): MessageWayLaravel
    {
        $apiKey = config("MessageWayLaravel.apiKey", "");
        return new self($apiKey);
    }

    /**
     * @param string $mobile
     * @param int $templateID
     * @param array $options
     * @return array
     * @throws Exception
     */
    public function sendViaWhatsapp(string $mobile, int $templateID, array $options = []):array
    {
        $provider = $this->getProviderByName('whatsapp');
        return $this->sendViaMessenger($mobile, $templateID, $provider, $options);
    }

    /**
     * @param string $mobile
     * @param int $templateID
     * @param array $options
     * @return array
     * @throws Exception
     */
    public function sendViaGap(string $mobile, int $templateID, array $options = []):array
    {
        $provider = $this->getProviderByName('gap');
        return $this->sendViaMessenger($mobile, $templateID, $provider, $options);
    }

    /**
     * @param string $mobile
     * @param int $templateID
     * @param array $options
     * @return array
     * @throws Exception
     */
    public function sendViaIGap(string $mobile, int $templateID, array $options = []):array
    {
        $provider = $this->getProviderByName('igap');
        return $this->sendViaMessenger($mobile, $templateID, $provider, $options);
    }
}
