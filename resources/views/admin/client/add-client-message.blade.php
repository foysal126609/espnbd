@extends('admin.master')
@section('title')
    Add Client Message
    @endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Client massage Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" action="{{url('/client/new')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="ClientName" class="col-sm-2 control-label">Client Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="client_name" id="ClientName" placeholder="Client Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ClientDesignation" class="col-sm-2 control-label">Client Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="client_designation" id="ClientDesignation" placeholder="Client Designation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ClientMassage" class="col-sm-2 control-label">Client Massage</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="client_massage" placeholder="Client Massage" id="ClientMassage"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ClientImage" class="col-sm-2 control-label">Client Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="client_image" id="ClientImage" accept="/*">
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
                        <button type="submit" class="btn btn-success">Save Client info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection