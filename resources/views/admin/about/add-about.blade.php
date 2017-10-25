@extends('admin.master')
@section('title')
    ADD About
    @endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD About Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" action="{{url('/about/new')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Heading" class="col-sm-2 control-label">Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="heading" id="Heading" placeholder="Heading">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message" placeholder="Message" id="Message"></textarea>
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
                        <button type="submit" class="btn btn-success">Save About info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection