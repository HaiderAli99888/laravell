@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <table class="table">
                        @foreach($blogs as $blog)
                            <tr >
                                <td class="border-0">
                                    <div class="row border-white">
                                        <div class="col-md-4">
                                            <img src="{{url($blog->avatar_path())}}" alt="" style="height: 300px;width: 300px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center">
                                            <div class="col-md-12">

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
                                        <div class="col-md-12 mt-3">
                                            <form action="{{route('comments.store')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" value="{{$blog->id}}" name="blog">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Leave a comment here." name="comment">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-primary"  id="basic-addon1"><i class=" fa fa-plus"></i> Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="list-group">
                                                @foreach($blog->comments as $comment)
                                                    <li class="list-group-item">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="{{url('img/profile.png')}}" class="comment-profile" alt="">
                                                                {{$comment->user->name}}
                                                            </div>
                                                            <div class="text-right">
                                                                <p class="text-muted">
                                                                    @if($comment->user_id==auth()->user()->id)
                                                                        <form method="post" action="{{route('comments.destroy',['id'=>$comment->id])}}" >
                                                                            {{csrf_field()}}
                                                                            @method('delete')
                                                                            <button class="btn text-light btn-danger btn-sm">
                                                                                <i class=" fa fa-trash"></i> Remove
                                                                            </button>
                                                                        </form>
                                                                    @endif
                                                                    <i class="fa fa-clock"></i>{{date('d F, y h:i A',strtotime($comment->created_at))}}
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <p class="ml-5">{{$comment->comment}}</p>

                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
