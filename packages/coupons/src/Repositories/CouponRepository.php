<?php

namespace Incevio\Package\Coupons\Repositories;

interface CouponRepository
{
    public function customer_list($coupon);

    public function syncCustomers($coupon, array $ids);
}
