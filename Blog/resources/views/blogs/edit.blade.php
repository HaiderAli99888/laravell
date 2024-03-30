@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-2">{{ __('Update Blog') }}</h3>
                    </div>
                    <div class="card-body px-5">
                        <form method="POST" action="{{ route('blogs.update',['blog'=>$edit->id]) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-form-label text-md-end">{{ __('Title') }}</label>
                                <input id="title" type="text" placeholder="Top 5 Universities in Europe" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title',$edit->title) }}"  autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="content" class="col-form-label text-md-end">{{ __('Content') }}</label>
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" placeholder="Based on various reputable international rankings up to my last update in January 2022, here is a list of some of the top universities in Europe:
1. University of Oxford (United Kingdom)
2. University of Cambridge (United Kingdom)
3. ETH Zurich - Swiss Federal Institute of Technology (Switzerland)
4. Imperial College London (United Kingdom)
5. University College London (United Kingdom)" name="content"  autocomplete="content" rows="10">{{ old('content',$edit->content) }}</textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="avatar" class="col-form-label text-md-end">{{ __('Avatar') }}</label>
                                <input id="avatar" type="file" class="form-control form-control-file @error('avatar') is-invalid @enderror" name="avatar"  >
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 offset-md-8">
                                <img src="{{url($edit->avatar_path())}}" alt="" style="height: 100px;width: 100px;object-fit: cover" class="img-thumbnail img-fluid bg-light">
                                <h6>Previous Avatar</h6>
                            </div>
                            <div class="row mb-0">
                                <button type="submit" class="btn btn-primary btn-block mt-4"><i class="fa fa-refresh"></i> {{ __('Update ') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
