<?php

abstract class AbstractCouponValidator
{
    protected Coupon $coupon;
    protected $nextValidator;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public abstract function validate(string $code);

    public function setNextValidator(AbstractCouponValidator $nextValidator)
    {
        $this->nextValidator = $nextValidator;
    }

    protected function goToNextValidator(string $code)
    {
        if ($this->nextValidator == null) {
            return true;
        }

        return $this->nextValidator->validate($code);
    }
}
