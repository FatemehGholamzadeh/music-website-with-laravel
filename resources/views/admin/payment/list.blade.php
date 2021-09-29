@extends('layouts.admin')
@section('content')
    <div class="col-md-9 col-lg-9">
        <h1>لیست پرداخت ها: </h1>
        @include('users.notification')
        @if($payments && count($payments)>0)
        <table class="table table-bordered">
            <thead>
                @include('admin.payment.item')
            </thead>


                @foreach($payments as $payment )
                    @include('admin.payment.columns',$payment)
                @endforeach
                @else
                    @include('admin.payment.no_item')
            </table>

        @endif
    </div>
@endsection




