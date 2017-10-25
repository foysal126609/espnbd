@extends('admin.master')
@section('title')
    EspnBD - View Notice
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> Notice information goes here</h3>
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Notice Title</th>
                                <td>{{$noticeById->notice_title}}</td>
                            </tr>
                            <tr>
                                <th>Author Name</th>
                                <td>{{$noticeById->author_name}}</td>
                            </tr>
                            <tr>
                                <th>Notice short Discription</th>
                                <td>{{$noticeById->notice_short_discription}}</td>
                            </tr>
                            <tr>
                                <th>Notice Long Discription</th>
                                <td>{{$noticeById->notice_long_discription}}</td>
                            </tr>
                            <tr>
                                <th>Notice Image</th>
                                <td><img src="{{asset($noticeById->notice_image)}}" alt="img" style="height: 70px" width="70px" ></td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{$noticeById->publication_status==1 ? 'Published':'Unpublished'}}</td>
                            </tr>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
