@extends('admin.master')
@section('title')
    EspnBD - Edit User
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD User Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" name="editadminForm" action="{{url('/user/update')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Admin Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{$userById->name}}" class="form-control" id="name">
                        <input type="hidden" name="user_id" value="{{$userById->id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Email address</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{$userById->email}}" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="exampleInputPassword1" class="col-sm-2 control-label">Password</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="inputPassword3"  class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="access_level">
                            <option>Select Access Level</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Executive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn" class="btn btn-success btn-flat">Update Admin info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        document.forms['editadminForm'].elements['access_level'].value='{{$userById->access_level}}';
    </script>
@endsection