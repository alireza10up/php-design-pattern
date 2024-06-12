<?php

require __DIR__ . '/Chains/CouponIsActive.php';
require __DIR__ . '/Chains/CouponIsExpired.php';
require __DIR__ . '/Chains/CouponIsExists.php';

class CouponValidator {
    private $coupon;

    public function __construct(Coupon $coupon) 
    {
        $this->coupon = $coupon;
    }

    public function validate(string $code)
    {
        $couponIsActive = new CouponIsActive($this->coupon);
        $couponIsExpired = new CouponIsExpired($this->coupon);
        $couponIsExists = new CouponIsExists($this->coupon);

        $couponIsActive->setNextValidator($couponIsExpired);
        $couponIsExpired->setNextValidator($couponIsExists);

        $couponIsActive->validate($code);
    }    
}
    