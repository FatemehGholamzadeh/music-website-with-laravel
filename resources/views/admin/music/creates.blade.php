
@extends('layouts.admin')
@section('content')

    <div id="container" style="background-color: white">
        <div class="container">
            <!-- Breadcrumb Start-->

            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                @include('users.partials.errors')
                @include('users.notification')
                <div class="col-sm-9" id="content">
                    <h1 class="title">آپلود آهنگ جدید</h1>
                    <form class="form-horizontal" method="post">
                        {{csrf_field()}}
                        <div style="display: none;" class="form-group required">
                            <label class="col-sm-2 control-label">گروه کاربران</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="1" name="customer_group_id">
                                        پیشفرض</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="F_name" class="col-sm-2 control-label"> نام آهنگ (فارسی)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="F_name"
                                       value="{{old('F_name',isset($fileItem) ? $fileItem->F_name : '')}}" name="F_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="E_name" class="col-sm-2 control-label">نام آهنگ(انگلیسی)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="E_name"
                                       value="{{old('E_name',isset($fileItem) ? $fileItem->E_name : '')}}" name="E_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="singer_Fname " class="col-sm-2 control-label">نام خواننده(فارسی)</label>
                            <div class="col-sm-10">
                                <input type="singer_Fname" class="form-control" id="singer_Fname " placeholder=""
                                       value="{{old('singer_Fname',isset($fileItem) ? $fileItem->singer_Fname : '')}}" name="singer_Fname ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="singer_Ename " class="col-sm-2 control-label">نام خواننده(انگلیسی)</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="singer_Ename " placeholder=""
                                       value="{{old('singer_Ename',isset($fileItem) ? $fileItem->singer_Ename : '')}}" name="singer_Ename ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject " class="col-sm-2 control-label">نوع آهنگ</label>
                            <div class="col-sm-10">
                                <input type="subject" class="form-control" id="subject " placeholder=""
                                       value="{{old('subject',isset($fileItem) ? $fileItem->subject : '')}}" name="subject ">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Lyrics " class="col-sm-2 control-label">متن آهنگ</label>
                            <textarea name="Lyrics" id="Lyrics" cols="80" rows="10">{{old('Lyrics',isset($fileItem) ? $fileItem->Lyrics : '')}}</textarea>
                        </div>



                        <div class="buttons">
                            <div class="pull-right">
                                &nbsp;
                                <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Middle Part End -->

            </div>
        </div>
    </div>
@endsection