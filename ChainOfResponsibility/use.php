<?php

require __DIR__ . '/ValidationCoupon.php';
require __DIR__ . '/Coupon.php';

$couponModel = new Coupon();
$couponValidator = new CouponValidator($couponModel);

$couponValidator->validate('xxxxxxxxxxx');