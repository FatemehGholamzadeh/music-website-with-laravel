<?php

namespace App\Http\Controllers\Admin;

use App\models\Payment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
      public function index()
    {
      //  $payments= Payment::with('user')->paginate(2);
        //$user=User::where('id',$payments)->get();
        $payments=Payment::all();
        return view('admin.payment.list',compact('payments'));
    }

    public function store()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function remove()
    {
        
    }
}
