@extends('admin.master')
@section('title')
    manage About
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All category information goes here</h3>
                    <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Si no</th>
                            <th>Heading</th>
                            <th>Message</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php $i=1 ?>
                        @foreach($allAbouts as $allAbout)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$allAbout->heading}}</td>
                                <td>{{$allAbout->message}}</td>
                                <td>{{$allAbout->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($allAbout->publication_status== 1)
                                        <a href="{{url('/about/unpublished/'.$allAbout->id)}}" class="btn btn-success btn-xs" title="Published ">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/about/published/'.$allAbout->id)}}" class="btn btn-warning btn-xs" title="UnPublished ">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif

                                    <a href="{{url('/about/edit/'.$allAbout->id)}}" class="btn btn-primary btn-xs" title="Edit ">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/about/delete/'.$allAbout->id)}}" onclick="return confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="delete">
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
