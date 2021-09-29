@extends('layouts.admin')
@section('content')
    <h1>لیست آلبوم ها </h1>
    @if($albums && count($albums)>0)
        <table class="table table-bordered">
            <thead>
            @include('admin.album.item')
            </thead>
            @foreach($albums as $album )
                @include('admin.album.columns',$album)
            @endforeach
        </table>

    @endif
@endsection