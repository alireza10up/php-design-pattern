<?php

class Coupon
{
    public function find()
    {
        return true;
    }

    public function isActive()
    {
        return true;
    }

    public function isExpired()
    {
        return false;
    }
}
