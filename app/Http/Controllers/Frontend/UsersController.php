<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\models\Concert;
use App\Models\Ticket;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{

    public function login()
    {
        return view('frontend.users.login');
    }

    public function dologin(Request $Request)
    {
        $this->validate($Request, [
            'email' => 'required',
            'password' => 'required',

        ], [
            'email.required' => 'وارد کردن ایمیل الزامی می باشد',
            'password.required' => 'وارد کردن پسورد الزامی می باشد',
        ]);
        $remember = $Request->has('remember');
        if (Auth::attempt(['email' => $Request->input('email'), 'password' => $Request->input('password')], $remember)) {
            return redirect()->route('frontend.musics.index')->with('success', ' با موفقیت وارد شدید.');
        } else {
            return redirect()->back()->with('loginError', 'نام ایمیل یا کلمه ی عبور اشتباه میباشد');
        }
    }

    public function register()
    {
        return view('frontend.users.register');
    }

    public function store(UserRequest $userRequest)
    {
        $user_data = [
            'username' => request()->input('username'),
            'F_name' => request()->input('F_name'),
            'E_name' => request()->input('E_name'),
            'email' => request()->input('email'),
            'phone' => request()->input('phone'),
            'role' => request()->input('role'),
            'city' => request()->input('city'),
            'state' => request()->input('state'),
            'password' => request()->input('password')
        ];
        $new_user_obj = User::create($user_data);
        if ($new_user_obj instanceof User) {
            return redirect()->route('frontend.users.register')->with('success', 'کاربر جدید با موفقیت ایجاد گردید.');
        } else {
            return redirect()->back()->with('loginError', 'در فرایند ثبت نام خطایی رخ داده است لطفا بعدا امتحان کنید.');

        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.musics.index')->with('success', ' با موفقیت وارد شدید.');
    }

    public function payment($ticket)
    {
        //  $ticket=$ticket->with('user')->get();
        $ticket = Ticket::whereId($ticket)->first();
        //   dd($ticket);
        $cat = Category::all();

        return view('frontend.payment.payment', compact('ticket','cat'));

    }

    public function reserve($id)
    {
        //$userItem = User::find(1);
        $u = Auth::user()->id;
        $user = User::where('id', $u)->first();
        $concertItem = Concert::where('id', $id)->first();
        $user->concerts()->attach($concertItem);
        $ticket_data = [
            'user_id' => $u,
            'concert_id' => $id,
            'seat_num' => 1,
            'status' => "پرداخت شده"
            //'returnedMoney' =>0
        ];
        $new_ticket_obj = Ticket::create($ticket_data);
        $ticket = $user->tickets()->with('concert')->get()->last();
        $numbers = range(1,40);
        $ss = Ticket::select('seat_num')->where('concert_id',$id)->get();
        foreach ($ss as $s) {
            unset($numbers[$s->seat_num - 1]);
        }
        $cat = Category::all();
        return view('frontend.reserve.reserve', compact('user', 'concertItem', 'ticket','numbers','cat'));
    }

    public function storeSeatNum(Request $request)
    {
        //$request->ticket->seat_num=$request->seat_num;
        $ticket = Ticket::whereId($request->ticket)->first();
        $ticket->seat_num = $request->seat_num;
        $ticket->save();

        //    dd($ss);
        //  array_diff($numbers,$s);
        // $diff = array_udiff($numbers, $s, 'arrayCmp');
        // dd($r);
        //foreach
        //  dd($ss);
//            unset($numbers[$s]);

//        $d=$request->seat_num-1;
//           unset($numbers[$d]);

        // dd($numbers);
        //endforeach
        $cat = Category::all();
        return redirect(route('frontend.users.payment',compact('ticket','cat')));
        // dd($t);
        //Ticket::save($request->ticket);
    }


}
