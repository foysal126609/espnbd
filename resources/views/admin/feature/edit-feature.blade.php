@extends('admin.master')
@section('title')
    EspnBD - Edit Feature
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">Edit Feature Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" name="editFeatureForm" action="{{url('/feature/update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="FeatureHeading" class="col-sm-2 control-label">Feature Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$featureById->feature_heading}}" name="feature_heading" id="FeatureHeading" placeholder="Feature Heading">
                        <input type="hidden" class="form-control" value="{{$featureById->id}}" name="feature_id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="FeatureDiscription" class="col-sm-2 control-label">Feature Discription</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="8" name="feature_discription" placeholder="Feature Discription" id="FeatureDiscription">{{$featureById->feature_discription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publicationStatus" class="col-sm-2 control-label">publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="publicationStatus" name="publication_status">
                            <option> -- Select publication Status--</option>
                            <option value="1">Published</option>
                            <option value="0">UnPublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">update Feature info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        document.forms['editFeatureForm'].elements['publication_status'].value='{{$featureById->publication_status}}';
    </script>

@endsection
