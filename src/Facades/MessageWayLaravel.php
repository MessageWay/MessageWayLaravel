<?php

namespace MessageWay\MessageWayLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array sendViaSMS(string $mobile, int $templateID, int $provider = 0, array $options = [])
 * @method static array sendViaMessenger(string $mobile, int $templateID, int $provider = 0, array $options = [])
 * @method static array sendViaIVR(string $mobile, int $templateID, int $provider = 0, array $options = [])
 * @method static array getStatus(string $OTPReferenceID = '')
 * @method static array verifyOTP(string $OTP = '', string $mobile = '')
 * @method static array sendViaWhatsapp(string $mobile, int $templateID, array $options = [])
 * @method static array sendViaGap(string $mobile, int $templateID, array $options = [])
 * @method static array sendViaIGap(string $mobile, int $templateID, array $options = [])
 * @method static \MessageWay\MessageWayLaravel\MessageWayLaravel getInstance()
 *
 * @see \MessageWay\Api\MessageWayAPI;
 */
class MessageWayLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'MessageWayLaravel';
    }
}
