<?php

namespace App\Repositories\Interface;

interface ChangeStatusInterface
{
    public function showStatus();
    public function changeStatus(array $data);
}
