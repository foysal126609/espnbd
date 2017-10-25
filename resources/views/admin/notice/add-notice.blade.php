@extends('admin.master')
@section('title')
    EspnBD - ADD Notice
    @endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Notice Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" action="{{url('/notice/new')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="NoticeTitle" class="col-sm-2 control-label">Notice Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="notice_title" id="NoticeTitle" placeholder="Notice Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="AuthorName" class="col-sm-2 control-label">Author Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author_name" id="AuthorName" placeholder="Author Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="NoticeShortDiscription" class="col-sm-2 control-label">Notice short Discription</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="notice_short_discription" placeholder="Notice short Discription" id="NoticeShortDiscription"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="NoticeLongDiscription" class="col-sm-2 control-label">Notice Long Discription</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="8" name="notice_long_discription" placeholder="Notice Long Discription" id="NoticeLongDiscription"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="NoticeImage" class="col-sm-2 control-label">Notice Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="notice_image" id="NoticeImage"accept="/*">
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
                        <button type="submit" class="btn btn-success">Save Notice info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection