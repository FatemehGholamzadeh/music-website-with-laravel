@extends('layouts.admin')
@section('content')
    <div class="col-md-10 col-lg-9">
        @include('frontend.users.notification')
    <h1>لیست نظرات </h1>
    @if($contact_us && count($contact_us)>0)
        <table class="table table-bordered">
            <thead>
            @include('admin.contact_us.item')
            </thead>
            @foreach($contact_us as $contact_us )
                @include('admin.contact_us.columns',$contact_us)
            @endforeach
        </table>
    @endif
    </div>
@endsection