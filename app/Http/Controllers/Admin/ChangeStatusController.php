<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\ChangeStatusInterface;
use Illuminate\Http\Request;

class ChangeStatusController extends Controller
{
    protected $changeStatus;

    public function __construct(ChangeStatusInterface $changeStatus)
    {
        $this->changeStatus = $changeStatus;
    }

    public function status(Request $request)
    {
        $status = $this->changeStatus->showStatus();
        return view('admin.changestatus', compact('status', 'request'));
    }

    public function statusPost(Request $request)
    {
        $data=[
            'id'=>$request->id,
            'name'=>$request->name,
            'status'=>$request->statusChange
        ];
        $statusChange = $this->changeStatus->changeStatus($data);
        if ($statusChange){
            return redirect()->route('admin.home');
        }
    }
}
