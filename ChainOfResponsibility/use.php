<?php

require __DIR__ . '/ValidationCoupon.php';
require __DIR__ . '/Coupon.php';

$couponModel = new Coupon();
$couponValidator = new CouponValidator($couponModel);

try {
    $couponValidator->validate('xxxxxxxxxxx');
} catch (Exception $exception) {
    echo $exception->getMessage();
}
