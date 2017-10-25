@extends('admin.master')
@section('title')
    EspnBD - Manage Category
@endsection
@section('content')
    <!-- Main content -->
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
                                <th>Slider Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i=1 ?>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><img src="{{asset($slider->slider_image)}}" width="150" height="100"></td>
                                    <td>{{$slider->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($slider->publication_status== 1)
                                            <a href="{{url('/slider/unpublished/'.$slider->id)}}" class="btn btn-success btn-xs" title="Published blog">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/slider/published/'.$slider->id)}}" class="btn btn-warning btn-xs" title="UnPublished blog">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="{{url('/slider/delete/'.$slider->id)}}" onclick="return confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="Edit blog">
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

