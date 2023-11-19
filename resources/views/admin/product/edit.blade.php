@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')

        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Sửa sản phẩm</h4>
                    </div>
                    <div class="box-body">
                        <form action="{{route('Admin_edit_pro',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Giá sản phẩm</label>
                                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Loại</label>
                                            <select class="form-select" data-placeholder="Choose a Category" tabindex="1">
                                                @foreach($cate as $cate)
                                                <option value="{{$cate->id}}" <?= ($cate->id ==  $product->category) ? 'selected' : ''; ?>>{{$cate->cate_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fw-700 fs-16 form-label">Status</label>
                                                <div class="radio-list">
                                                    <label class="radio-inline p-0 me-10">
                                                        <div class="radio radio-info">
                                                            <input type="radio" name="radio" id="radio1" value="option1">
                                                            <label for="radio1">Published</label>
                                                        </div>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <div class="radio radio-info">
                                                            <input type="radio" name="radio" id="radio2" value="option2">
                                                            <label for="radio2">Draft</label>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fw-700 fs-16 form-label">Price</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-money"></i></div>
                                                    <input type="text" class="form-control" placeholder="270">
                                                </div>
                                            </div>
                                        </div> -->
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Giảm giá còn</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-cut"></i></div>
                                            <input type="text" class="form-control" name="deal" value="{{$product->deal}}">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Chi tiết sản phẩm</label>
                                        <textarea class="form-control p-15" name="description" rows="4">{{$product->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Tiêu đề sản phẩm</label>
                                        <input name="title" type="text" class="form-control" value="{{$product->title}}">
                                    </div>
                                </div>
                                <!--/span-->
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Từ khóa</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div> -->
                                <!--/span-->
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 control-label">Ảnh sản phẩm</label>
                                    <div class="col-md-9 col-sm-8">
                                        <div class="row">
                                            <div class="col-xs-6">

                                                <img style="height:300px;width:300px" id="anhSanPham" src="{{ asset('storage/'.$product->image) }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                <div class="input-group">
                                                    <label class="input-group-text btn-primary" for="anh">Upload ảnh</label>
                                                    <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror form-control" id="anh">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group my-3">

                            </div>

                            <button class="btn btn-success">Lưu</button>
                            <button class="btn btn-danger">Không lưu</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
@section('script')
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#anh").change(function() {
            readURL(this, '#anhSanPham');
        });

    });
</script>
@endsection