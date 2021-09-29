@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container-fluid " style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">ویرایش دسته بندی</a></li>
                </ul>
            </div>
            @include('users.partials.errors')
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">ویرایش دسته بندی  </h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">عنوان :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name"
                                   value="{{old('name',isset($catItem) ? $catItem->name : '')}}" name="name">
                        </div>

                        <br>
                        <br>


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