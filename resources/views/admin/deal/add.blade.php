@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')
        <!-- Main content -->
        <form action="{{route('Admin_add_deal')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-700 fs-16 form-label">Tên mã giảm giá</label>
                            <input type="text" class="form-control" name="title" value="">
                        </div>
                    </div>

                    <!--/span-->

                    <!--/span-->
                </div>
                <!--/row-->
                <!--/row-->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="fw-700 fs-16 form-label">Giảm giá theo phần trăm</label>
                    <input type="number" class="form-control" name="deal_value" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="fw-700 fs-16 form-label">Mã giảm giá</label>
                    <input type="text" class="form-control" name="code" value="">
                </div>
            </div>

            <!--/row-->
            <!-- <div class="row">
                                         -->
            <!--/span-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="fw-700 fs-16 form-label">Ngày bắt đầu</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-cut"></i></div>
                            <input type="date" class="form-control" name="time_start" value="">
                        </div>
                    </div>
                </div>

            </div>
            <!--/span-->
    </div>

    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="fw-700 fs-16 form-label">Ngày kết thuc</label>
                <input type="date" class="form-control" name="time_end">
            </div>
        </div>
        <!--/span-->



    </div>

    <button class="btn btn-success">Lưu</button>
    <button class="btn btn-danger">Không lưu</button>



    </form>
    <!-- /.content -->
</div>
</div>
@endsection