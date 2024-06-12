<?php

require_once __DIR__ . '/AbstractCouponValidator.php';

class CouponIsExists extends AbstractCouponValidator
{
    public function validate(string $code)
    {
        if (empty($this->coupon->find($code))) {
            throw new Exception('Code Not Exists');
        }

        echo 'Coupon Exists' . PHP_EOL;

        $this->goToNextValidator($code);
    }
}
