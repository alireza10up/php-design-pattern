<?php

require_once __DIR__ . '/AbstractCouponValidator.php';

class CouponIsExpired extends AbstractCouponValidator
{
    public function validate(string $code)
    {
        if ($this->coupon->isExpired($code)) {
            throw new Exception('Code Is Expired');
        }

        echo 'Coupon Is Not Expired' . PHP_EOL;

        $this->goToNextValidator($code);
    }
}
