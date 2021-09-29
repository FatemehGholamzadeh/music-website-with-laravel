@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container-fluid" style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">آپلود آلبوم  </a></li>
                </ul>
            </div>

            <!--Middle Part Start-->
            @include('frontend.partials.errors')
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">آپلود آلبوم </h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">نام فارسی آلبوم  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="F_name" placeholder="نام کامل فارسی آلبوم را وارد کنید "
                                   value="{{old('F_name',isset($albums) ? $albums->F_name : '')}}" name="F_name">                            </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">نام انگلیسی آلبوم  :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="E_name" placeholder="نام کامل انگلیسی آلبوم را وارد کنید "
                                       value="{{old('E_name',isset($albums) ? $albums->E_name : '')}}" name="E_name">                                </div>

                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">نام فارسی خواننده : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید " value="{{old('singer_Fname',isset($albums) ? $albums->singer_Fname : '')}}" name="singer_Fname">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">نام انگلیسی خواننده : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید " value="{{old('singer_Ename',isset($albums) ? $albums->singer_Ename : '')}}" name="singer_Ename">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">موضوع : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="subject" placeholder=" موضوع آهنگ را وارد نمایید" value="{{old('subject',isset($albums) ? $albums->subject : '')}}" name="subject">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">دسته بندی موزیک ویدئو </label>
                                <div class="col-sm-8">
                                    <select class="select2" id="category" name="category[]"   style="width: 530px">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="form-group required">
                                <label class="col-md-4 col-sm-4 control-label" for="input-enquiry">متن آلبوم </label>
                                <div class="col-md-8 col-sm-8">
                                    <textarea name="Lyrics" rows="10" id="Lyrics" class="form-control" placeholder="متن مورد نظر خود را وارد نماییده">{{old('Lyrics',isset($albumItem) ? $albumItem->Lyrics : '')}}</textarea>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">فایل: </label>
                                <div class="-sm-10">
                                    <input type="file" name="albumItem" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">پوستر: </label>
                                <div class="-sm-10">
                                    <input type="file" name="posterItem" >
                                </div>
                            </div>
                            <br>

                            <div class="buttons">
                                <div class="pull-right">                            &nbsp;
                                    <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
@endsection