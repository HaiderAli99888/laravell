@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('blogs.create')}}" class="btn text-white float-right btn-primary"><i class="fa fa-plus"></i> Create Post</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        @if(count($blogs)>0)
                            @foreach($blogs as $blog)
                                <tr >
                                    <td class="border-0">
                                        <div class="row border-white">
                                            <div class="col-md-4">
                                                <img src="{{url($blog->avatar_path())}}" alt="" style="height: 300px;width: 300px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <div class="col-md-12">
                                                    <div class="d-flex justify-content-end">
                                                        @if($blog->user_id==auth()->user()->id)
                                                            <a href="{{route('blogs.edit',['blog'=>$blog->id])}}" class="btn btn-sm btn-success text-white"> <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="{{ route('blogs.destroy', ['blog' => $blog->id]) }}" class="btn btn-sm btn-danger text-white ml-1" onclick="event.preventDefault(); document.getElementById('delete-form-{{$blog->id}}').submit();">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </a>
                                                            <form id="delete-form-{{$blog->id}}" action="{{ route('blogs.destroy', ['blog' => $blog->id]) }}" method="POST" style="display: none;">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        @endif

                                                    </div>
                                                    <h6 class="text-success">{{$blog->title}}</h6>
                                                    <p>{{$blog->content}}</p>
                                                    <p class="text-muted float-right">
                                                        By <b>{{$blog->user->name}}</b>
                                                        on
                                                        <i class="fa fa-clock"></i>
                                                        <b>{{date('d F, y H:i A ',strtotime($blog->created_at))}}</b>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @else
                            <tr>
                                <td class="text-center border-0">
                                    No blog posted yet.
                                </td>
                            </tr>
                        @endif


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
