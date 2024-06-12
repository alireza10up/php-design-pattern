<?php

class CouponIsExists
{
    private Coupon $coupon;
    private $nextValidator;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function validate(string $code)
    {
        if (empty($this->coupon->find($code))) {
            throw new Exception('Code Not Exists');
        }

        echo 'Coupon Exists' . PHP_EOL;

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
