<?php

namespace App\Http\Controllers\Frontend;

use App\models\Concert;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;


class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user() ;
        $u=$user->id;
        $user=User::where('id',$u)->first();
        $tickets = $user->tickets()->with('concert')->get();
        //dd($tickets);
       // $t = $tickets->where('id',2);

      // $concert= $t->with('concert')->first();
      // dd($concert->concert);
        return view('frontend.users.profile',compact('tickets','user'));

    }
    public function cancel($ticket)
    {
        //dd($ticket->get());
        //$user = Auth::user() ;
        //$u=$user->id;
        //$user=User::where('id',$u)->first();
       // $t_id = $ticket->id;
        $tick=Ticket::whereId($ticket)->first();
        $tick->status='کنسل شده';
        $tick->returnedMoney = 0.8*($tick->concert->price);
        $tick->save();
        //$tickets = $user->tickets()->with('concert')->get();
        //return view('frontend.users.profile',compact('tickets','user'));
        return redirect(route('frontend.users.index'));

    }
}
