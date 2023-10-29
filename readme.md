![messageWay](assets/logo.png)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![MessageWay][ico-MSGWay]][link-MSGWay]
[![MessageWay][ico-README]][link-README]


# MessageWay Laravel
This package allows you to connect to MSGWay.com server from your laravel applications.

## Available Methods

- SMS (Iran: 2000, 3000, 9000, 50004)
- Global SMS (with Twilio)
- Messenger
    - ~~[Whatsapp](https://whatsapp.com) Messenger~~
    - [Gap](https://gap.im) Messenger
    - [iGap](https://igap.net) Messenger
- IVR


## Installation

Via Composer

``` bash
$ composer require messageway/messagewaylaravel
```

## Usage

### ApiKey
Please register on [MSGWay.com](https://msgway.com) and get `apiKey`

### Environment
Please add environment on `.env` file
```dotenv
MESSAGE_WAY_APIKEY=''
```

### Send via SMS

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$message = MessageWayLaravel::sendViaSMS('MOBILE', $templateID);
dump($message);
```


### Send via GapMessenger

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$message = MessageWayLaravel::sendViaGap('MOBILE', $templateID, [
    'params' => ['param 1 value', 'param 2 value', 'param 3 value']
]);
dump($message);
```

### Send via IVR

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$templateID = 2;
$message = MessageWayLaravel::sendViaIVR('MOBILE', $templateID);
dump($message);
```

---

## Verify OTP

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$verify = MessageWayLaravel::verifyOTP($OTP);
dump($verify);
```

---

## Status

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$status = MessageWayLaravel::getStatus($OTPRefrenceID);
dump($status);
```

---


## License

MIT.

[ico-version]: https://img.shields.io/packagist/v/messageway/messagewaylaravel.svg?style=for-the-badge
[ico-downloads]: https://img.shields.io/packagist/dt/messageway/messagewaylaravel.svg?style=for-the-badge
[ico-MSGWay]: https://img.shields.io/badge/-MSGWay.com-critical?link=https://MSGWay.com&style=for-the-badge
[ico-README]: https://img.shields.io/badge/-Persian-lightgrey?link=./readme-fa.md&style=for-the-badge

[link-packagist]: https://packagist.org/packages/messageway/messagewaylaravel
[link-downloads]: https://packagist.org/packages/messageway/messagewaylaravel
[link-MSGWay]: https://MSGWay.com/
[link-README]: https://github.com/MessageWay/MessageWayLaravel/blob/main/readme-fa.md
