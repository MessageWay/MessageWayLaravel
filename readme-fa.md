
<div dir=rtl>

![messageWay](assets/logo-fa.png)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![MessageWay][ico-MSGWay]][link-MSGWay]
[![MessageWay][ico-README]][link-README]

#راه‌پیام

ارسال پیام از کانال‌های مختلف پیام‌کوتاه، پیام صوتی، پیام‌رسان‌ها و حالت هیبریدی هوشمند.
- کدنویسی آسان جهت ارتباط سایت/اپلیکیشن شما با سامانه راه‌پیام
- بدون نیاز به قرارداد و خرید خط پیامک و خط تلفن
- ارسال از خطوط خدماتی با اولویت ارسال بالا

با استفاده از این پکیج شما می‌توانید براحتی در پروژه لاراولی خودتون، ارسال پیام رو انجام بدین.

## نصب و راه‌اندازی

با استفاده از Composer

<div dir=ltr>

``` bash
$ composer require messageway/messagewaylaravel

#Or if using Laravel Sail
$ sail composer require messageway/messagewaylaravel
```
</div>

## نحوه استفاده
### دریافت ApiKey
برای دریافت `apiKey` باید ابتدا در سایت [MSGWay.com](https://msgway.com) ثبت نام کنید و از طریق پنل کاربری `apiKey` را دریافت کنید.

### تنظیمات
لطفا environment های ذیل رو به فایل  `.env` اضافه کنید

<div dir=ltr>

```dotenv
MESSAGE_WAY_APIKEY=''
```
</div>

### ارسال از طریق پیام کوتاه

<div dir=ltr>

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$message = MessageWayLaravel::sendViaSMS('MOBILE', $templateID);
dump($message);
```
</div>

### ارسال از طریق پیام‌رسان گپ

<div dir=ltr>

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$message = MessageWayLaravel::sendViaGap('MOBILE', $templateID, [
    'param1' => 'param 1 value',
    'param2' => 'param 2 value',
]);
dump($message);
```
</div>

### ارسال از طریق تماس صوتی

<div dir=ltr>

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$templateID = 2;
$message = MessageWayLaravel::sendViaIVR('MOBILE', $templateID);
dump($message);
```
</div>

### نمایش وضعیت 
<div dir=ltr>

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$status = MessageWayLaravel::getStatus($OTPRefrenceID);
dump($status);
```
</div>

### تایید OTP

<div dir=ltr>

```php
use MessageWay\MessageWayLaravel\Facades\MessageWayLaravel;

$verify = MessageWayLaravel::verifyOTP($OTP);
dump($verify);
```
</div>

</div>


[ico-version]: https://img.shields.io/packagist/v/messageway/messagewaylaravel.svg?style=for-the-badge
[ico-downloads]: https://img.shields.io/packagist/dt/messageway/messagewaylaravel.svg?style=for-the-badge
[ico-MSGWay]: https://img.shields.io/badge/-MSGWay.com-critical?link=https://MSGWay.com&style=for-the-badge
[ico-README]: https://img.shields.io/badge/-English-lightgrey?link=./readme.md&style=for-the-badge

[link-packagist]: https://packagist.org/packages/messageway/messagewaylaravel
[link-downloads]: https://packagist.org/packages/messageway/messagewaylaravel
[link-MSGWay]: https://MSGWay.com/
[link-README]: https://github.com/MessageWay/MessageWayLaravel/blob/main/readme.md