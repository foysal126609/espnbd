@extends('admin.master')
@section('title')
    Add Client Message
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Team massage Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" action="{{url('/team/new')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Designation" class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="designation" id="Designation" placeholder="Designation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Massage" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message" placeholder="Massage" id="Massage"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Image" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" id=Image" accept="/*">
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
                        <button type="submit" class="btn btn-success">Save Team Message info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection