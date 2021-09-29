@extends('layouts.admin')
@section('content')
    <div class="col-md-9 col-lg-9">
        <h1>لیست دسته بندی ها </h1>
        @include('users.notification')
        @if($categories && count($categories)>0)
            <table class="table table-bordered">
                <thead>
                @include('admin.category.columns')
                </thead> 
                @foreach($categories as $category )
                    @include('admin.category.item',$category)
                @endforeach
            </table>
        @endif
    </div>
@endsection
