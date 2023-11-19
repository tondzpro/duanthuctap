@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')
        <!-- Main content -->
        <form action="{{route('Admin_add_pro')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-700 fs-16 form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-700 fs-16 form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" name="price" value="">
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <!--/row-->
            </div>



            <!--/row-->
            <!-- <div class="row">
                                         -->
            <!--/span-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="fw-700 fs-16 form-label">Giảm giá còn</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-cut"></i></div>
                            <input type="text" class="form-control" name="deal" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="fw-700 fs-16 form-label">Loại sản phẩm</label>
                        <div class="input-group">
                            <select name="category" class="form-control" id="">
                                <option value="" selected hidden></option>
                                @foreach($cate as $cate)
                                <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--/span-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="fw-700 fs-16 form-label">Chi tiết sản phẩm</label>
                <textarea class="form-control p-15" name="description" rows="4"></textarea>
            </div>
        </div>
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="fw-700 fs-16 form-label">Tiêu đề sản phẩm</label>
                <input type="text" class="form-control" name="title">
            </div>
        </div>
        <!--/span-->


        <div class="form-group">
            <label class="col-md-3 col-sm-4 control-label">Ảnh chính sản phẩm</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">

                        <img style="height:300px;width:300px" id="anhSanPham" src="{{asset('assets/images/pngtree-empty-delivery-gift-box-png-image_6091834.png')}}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                        <div class="input-group">
                            <label class="input-group-text btn-primary" for="anh">Upload ảnh</label>
                            <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror form-control" id="anh">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-4 control-label">Ảnh chi tiết sản phẩm</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">

                        <img style="height:300px;width:300px" id="anhSanPham" src="{{asset('assets/images/pngtree-empty-delivery-gift-box-png-image_6091834.png')}}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                        <div class="input-group">
                            <label class="input-group-text btn-primary" for="anh">Upload ảnh</label>
                            <input type="file" name="images[]" accept="image/*" class="form-control-file @error('image') is-invalid @enderror form-control" id="anh" multiple>
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
    <!-- /.content -->
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