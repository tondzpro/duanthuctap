@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')
        <div class="box mt-5">
            <div class="media-list media-list-divided media-list-hover">
                @foreach($bill as $pr)
                <div class="media align-items-center ">

                    <div class="media-body">
                        <p>
                            <a href="#"><strong>{{$pr->name}}</strong></a>

                        </p>
                        <p><label for="">đặt lúc </label>
                            <small class="sidetitle">{{$pr->created_at}}</small>
                        </p>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="{{ route('Admin_accept_order', ['id' => $pr->id]) }}" data-bs-toggle="tooltip" title="xác nhận đơn"><i class="fa fa-check"></i></a>
                        <a class="media-action lead" href="{{route('Admin_delete_order',['id'=>$pr->id])}}" data-bs-toggle="tooltip" title="hủy đơn"><i class="fa fa-remove"></i></a>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
</div>
@endsection