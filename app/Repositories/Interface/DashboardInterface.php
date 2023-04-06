<?php

namespace App\Repositories\Interface;

interface DashboardInterface
{
    public function processing();
    public function cancel();
    public function success();
    public function totalPrice();
    public function allProduct();
}
