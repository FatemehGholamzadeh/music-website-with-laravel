
@extends('layouts.admin')
@section('content')
        <div id="container">
            <div class="container-fluid" style="width: 90%">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="album_upload.html">آپلود آلبوم  </a></li>
                </ul>

                <!--Middle Part Start-->
                @include('users.partials.errors')
                <div class="col-sm-9" id="content">
                    <h1 class="title" style="color: seagreen;">آپلود آلبوم </h1>
                    <br>
                    <form class="text-center " method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">نام فارسی آلبوم  :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="F_name"
                                       value="{{old('F_name',isset($albumItem) ? $albumItem->F_name : '')}}" name="F_name">                            </div>

                            <br>
                            <br>
                            <div class="form-group">
                                <label  class="col-sm-4 control-label">نام انگلیسی آلبوم  :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="E_name"
                                           value="{{old('E_name',isset($albumItem) ? $albumItem->E_name : '')}}" name="E_name">                                </div>

                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">نام فارسی خواننده : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید " value="{{old('singer_Fname',isset($albumItem) ? $albumItem->singer_Fname : '')}}" name="singer_Fname">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">نام انگلیسی خواننده : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید " value="{{old('singer_Ename',isset($albumItem) ? $albumItem->singer_Ename : '')}}" name="singer_Ename">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">موضوع : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="subject" placeholder=" موضوع آهنگ را وارد نمایید" value="{{old('subject',isset($albumItem) ? $albumItem->subject : '')}}" name="subject">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">دسته بندی آلبوم </label>
                                    <div class="col-sm-8">
                                        <select class="select2" id="category" name="category[]"  multiple>
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
                                        <textarea name="Lyrics" rows="10" id="Lyrics" class="form-control">{{old('Lyrics',isset($albumItem) ? $albumItem->Lyrics : '')}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="-sm-2 control-label">فایل: </label>
                                    <div class="-sm-10">
                                        <input type="file" name="albumItem" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="-sm-2 control-label">پوستر: </label>
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