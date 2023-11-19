@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')
        <!-- Main content -->
        <form action="{{route('edit_cate',['id'=>$cate->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-700 fs-16 form-label">Loại sản phẩm</label>
                            <input type="text" class="form-control" name="cate_name" value="{{$cate->cate_name}}">
                        </div>
                    </div>
                    <!--/span-->

                    <!--/span-->
                </div>
                <!--/row-->
                <!--/row-->
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

            <!--/span-->
    </div>

    <!--/row-->


    <button class="btn btn-success">Lưu</button>



    </form>
    <!-- /.content -->
</div>
</div>
@endsection