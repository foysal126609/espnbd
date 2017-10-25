@extends('admin.master')
@section('title')
    manage Client Message
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Team Massage information goes here</h3>
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th> Image </th>
                                <th>Message</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i=1 ?>
                            @foreach($allTeamMessages as $allTeamMessages)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$allTeamMessages->name}}</td>
                                    <td>{{$allTeamMessages->designation}}</td>
                                    <td>
                                        <img src="{{asset($allTeamMessages->image)}}" alt="img" width="50" height="50"/>
                                    </td>
                                    <td>{{$allTeamMessages->message}}</td>
                                    <td>{{$allTeamMessages->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($allTeamMessages->publication_status== 1)
                                            <a href="{{url('/team/unpublished/'.$allTeamMessages->id)}}" class="btn btn-success btn-xs" title="Published message">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/team/published/'.$allTeamMessages->id)}}" class="btn btn-warning btn-xs" title="UnPublished message">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{url('/team/delete/'.$allTeamMessages->id)}}" onclick="return confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="Delete message">
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
