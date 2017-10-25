@extends('admin.master')
@section('title')
  EspnBD - Add product
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="well text-bold text-blue text-center" style="margin-top: 25px">Update Notice Form</div>
            <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
            <form class="form-horizontal" name="editNoticeForm" action="{{url('/notice/update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="ProductName" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$noticeById->notice_title}}" class="form-control" name="notice_title" id="ProductName" placeholder="Product Name">
                        <input type="hidden" value="{{$noticeById->id}}" name="notice_id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductPrice" class="col-sm-2 control-label">Product price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$noticeById->author_name}}" name="author_name" id="ProductPrice" placeholder="Product price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductDiscription" class="col-sm-2 control-label">Product Discription</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="8" name="notice_short_discription" placeholder="Product Discription" id="ProductDiscription">{{$noticeById->notice_short_discription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductDiscription" class="col-sm-2 control-label">Product Discription</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="8" name="notice_long_discription" placeholder="Product Discription" id="ProductDiscription">{{$noticeById->notice_long_discription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProductPrice" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="notice_image" id="ProductPrice" accept="image/*">
                        <img src="{{asset($noticeById->notice_image)}}" height="70" width="70">
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
                        <button type="submit" class="btn btn-success">Update Product info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <script>
        document.forms['editNoticeForm'].elements['publication_status'].value='{{$noticeById->publication_status}}';
    </script>
@endsection