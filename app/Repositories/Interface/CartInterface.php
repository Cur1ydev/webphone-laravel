<?php

namespace App\Repositories\Interface;

interface CartInterface
{
    public function getAll();
    public function Delete($id);
}
