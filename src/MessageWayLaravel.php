<?php

namespace MessageWay\MessageWayLaravel;

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
     * @throws \Exception
     */
    public function sendViaWhatsapp(string $mobile, int $templateID, array $options = []):array
    {
        return $this->sendViaMessenger($mobile, $templateID, 'whatsapp', $options);
    }

    /**
     * @param string $mobile
     * @param int $templateID
     * @param array $options
     * @return array
     * @throws \Exception
     */
    public function sendViaGap(string $mobile, int $templateID, array $options = []):array
    {
        return $this->sendViaMessenger($mobile, $templateID, 'gap', $options);
    }
}
