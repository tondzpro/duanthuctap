@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper ">
    <div class="container-full">
        @include('admin.templates.error')
        <div class="box ">
            <div class="media-list media-list-divided media-list-hover">
                @foreach($cate as $pr)
                <div class="media align-items-center ">

                    <div class="media-body">
                        <p>
                            <a href="#"><strong>{{$pr->cate_name}}</strong></a>

                        </p>
                        <p><label for="">cập nhật lần cuối</label>
                            <small class="sidetitle">{{$pr->created_at}}</small>
                        </p>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="{{ route('edit_cate', ['id' => $pr->id]) }}" data-bs-toggle="tooltip" title="edit"><i class="fa fa-edit"></i></a>
                        <a class="media-action lead" href="{{route('delete_cate',['id'=>$pr->id])}}" data-bs-toggle="tooltip" title="remove"><i class="fa fa-remove"></i></a>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
</div>
@endsection