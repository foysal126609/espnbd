@extends('admin.master')
@section('title')
    EspnBD - manage User
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All User information goes here</h3>
                    <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Si no</th>
                            <th>Admin Name</th>
                            <th>Email Address</th>
                            <th>Access Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1 ?>
                        @foreach($allusers as $alluser)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$alluser->name}}</td>
                                <td>{{$alluser->email}}</td>
                                <td>{{$alluser->access_level}}</td>
                                <td>
                                    <a href="{{url('/admin/edit/'.$alluser->id)}}" class="btn btn-primary btn-xs" title="Edit blog">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/admin/delete/'.$alluser->id)}}" onclick="return confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="Edit blog">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@endsection
