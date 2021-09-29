@extends('layouts.admin')
@section('content')
    <div id="container">
        <div class="container-fluid" style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">آپلود کنسرت  </a></li>
                </ul>
            </div>

            <!--Middle Part Start-->
            @include('users.partials.errors')
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">آپلود کنسرت </h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">نام فارسی خواننده یا گروه  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید"
                                   value="{{old('singer_Fname',isset($concertItem) ? $concertItem->singer_Fname : '')}}" name="singer_Fname">
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">نام انگلیسی خواننده یا گروه :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید"
                                       value="{{old('singer_Ename',isset($concertItem) ? $concertItem->singer_Ename : '')}}" name="singer_Ename">
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">محل برگزاری کنسرت : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="location" placeholder="محل برگزاری کنسرت را وارد کنید " value="{{old('location',isset($concertItem) ? $concertItem->location : '')}}" name="location">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">تاریخ برگزاری کنسرت : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="date" placeholder="تاریخ برگزاری کنسرت را وارد نمایید " value="{{old('date',isset($concertItem) ? $concertItem->date : '')}}" name="date">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">قیمت بلیط کنسرت :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="price" placeholder=" قیمت بلیط کنسرت را وارد نمایید" value="{{old('price',isset($concertItem) ? $concertItem->price : '')}}" name="price">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">پوستر: </label>
                            <div class="col-sm-10">
                                <input type="file" name="concertposter" >
                            </div>
                        </div>
                        <br><br><br>
                        <div class="buttons">
                            <div class="pull-right">                          
                                <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
@endsection