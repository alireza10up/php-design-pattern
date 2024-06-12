<?php

class CouponIsActive
{
    private Coupon $coupon;
    private $nextValidator;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function validate(string $code)
    {
        if (!$this->coupon->isActive($code)) {
            throw new Exception('Code Is Not Active');
        }

        echo 'Coupon Is Active' . PHP_EOL;

        $this->goToNextValidator($code);
    }

    public function setNextValidator($nextValidator)
    {
        $this->nextValidator = $nextValidator;
    }

    public function goToNextValidator(string $code)
    {
        if ($this->nextValidator == null) {
            return true;
        }

        return $this->nextValidator->validate($code);
    }
}
