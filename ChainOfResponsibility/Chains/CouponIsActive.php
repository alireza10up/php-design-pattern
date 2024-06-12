<?php

require_once __DIR__ . '/AbstractCouponValidator.php';

class CouponIsActive extends AbstractCouponValidator
{
    public function validate(string $code)
    {
        if (!$this->coupon->isActive($code)) {
            throw new Exception('Code Is Not Active');
        }

        echo 'Coupon Is Active' . PHP_EOL;

        $this->goToNextValidator($code);
    }
}
