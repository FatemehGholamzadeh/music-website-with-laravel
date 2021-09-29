@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container-fluid " style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">آپلود موزیک ویدئو  </a></li>
                </ul>
            </div>


            <!--Middle Part Start-->
            @include('users.partials.errors')
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">آپلود موزیک ویدئو </h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">نام فارسی موزیک ویدئو  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="F_name" placeholder="نام کامل فارسی موزیک ویدئو را وارد کنید"
                                   value="{{old('F_name',isset($musicvideoItem) ? $musicvideoItem->F_name : '')}}" name="F_name">
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">نام انگلیسی موزیک ویدئو  :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="E_name" placeholder="نام کامل انگلیسی موزیک ویدئو را وارد کنید"
                                       value="{{old('E_name',isset($musicvideoItem) ? $musicvideoItem->E_name : '')}}" name="E_name">
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام فارسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید " value="{{old('singer_Fname',isset($musicvideoItem) ? $musicvideoItem->singer_Fname : '')}}" name="singer_Fname">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام انگلیسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید " value="{{old('singer_Ename',isset($musicvideoItem) ? $musicvideoItem->singer_Ename : '')}}" name="singer_Ename">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">موضوع : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="subject" placeholder=" موضوع آهنگ را وارد نمایید" value="{{old('subject',isset($musicvideoItem) ? $musicvideoItem->subject : '')}}" name="subject">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">دسته بندی موزیک ویدئو </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="category" name="category">
                                    <option value="شاد" {{isset($musicvideoItem) && $musicvideoItem->category == 'شاد'? 'selected' : ''}}>شاد </option>
                                    <option value="غمگین" {{isset($musicvideoItem) && $musicvideoItem->category == 'غمگین'? 'selected' : ''}}>غمگین</option>
                                    <option value="پاپ" {{isset($musicvideoItem) && $musicvideoItem->category == 'پاپ'? 'selected' : ''}}>پاپ </option>
                                    <option value="سنتی" {{isset($musicvideoItem) && $musicvideoItem->category == 'سنتی'? 'selected' : ''}}>سنتی</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نوع موزیک ویدئو </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="type" name="type">
                                    <option value="ایرانی" {{isset($musicvideoItem) && $musicvideoItem->type == 'ایرانی'? 'selected' : ''}}>ایرانی </option>
                                    <option value="خارجی" {{isset($musicvideoItem) && $musicvideoItem->type == 'خارجی'? 'selected' : ''}}>خارجی</option>

                                </select>
                            </div>
                        </div>
                        <br>
                        <br>

                        <br>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">فایل: </label>
                            <div class="col-sm-10">
                                <input type="file" name="musicvideoItem" >
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">پوستر: </label>
                            <div class="col-sm-10">
                                <input type="file" name="musicvideoposter" >
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