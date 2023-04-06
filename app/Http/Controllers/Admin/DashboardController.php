<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\DashboardInterface;

class DashboardController extends Controller
{
    protected $dashboard;
    public function __construct(DashboardInterface $dashboardInterface)
    {
        $this->dashboard=$dashboardInterface;
    }

    public function dashboard(){
        $countProcessing=$this->dashboard->processing();
        $cancel=$this->dashboard->cancel();
        $success=$this->dashboard->success();
        $totalPrice=$this->dashboard->totalPrice();
        $allProduct=$this->dashboard->allProduct();
        return view('admin.index',compact('countProcessing','cancel','success','totalPrice','allProduct'));
    }
}
