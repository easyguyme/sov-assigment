@extends('layouts.user_type.auth')

@section('content')
    <style>
        .ck.ck-content:not(.ck-comment__input *) {
            height: 300px;
            overflow-y: auto;
        }
    </style>

        <div class="container-fluid">
            <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 30%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card  blur shadow-blur mx-4 mt-n6">
                <div class="card-header shadow-blur pb-0 px-3">
                    <h6 class="mb-0">{{ __('Create New Post') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{route('posts.store')}}" method="POST" role="form text-left" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="form-control-label">{{ __('Post Title:') }}</label>
                                    <div class="@error('title')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="Post title" id="title" name="title" required>
                                        @error('title')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="excerpt">{{ 'Excerpt' }}</label>
                            <div class="@error('excerpt')border border-danger rounded-3 @enderror">
                                <textarea class="form-control" id="excerpt" rows="3" placeholder="Summarize your post" name="excerpt" required></textarea>
                            </div>
                                    <p class="text-muted">Excerpts are hand-crafted summaries of your content.</p>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <label for="content">{{ 'Content' }}</label>
                                    <div class="@error('content')border border-danger h-50 @enderror">
                                        <textarea class="form-control h-50" id="content" rows="5" placeholder="Let loose your writing prowess" name="content" ></textarea>
                                    </div>


                            </div>
                            <div class="col-md-6 col-sm">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Featured Image</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <img id="image-preview" src="{{ asset('assets/img/noimage.jpg') }}" class="img-thumbnail" height="500px" width="500px" style=" height: 50%; ">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="form-control-label">{{ __('Upload Image:') }}</label>
                                    <div class="@error('image')border border-danger rounded-3 @enderror">
                                        <input type="file" name="image" id="image" class="form-control-file" accept=".png, .jpg, .jpeg" required>
                                        @error('image')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label for="publish" class="form-control-label">{{ __('Save as Draft/Publish:') }}</label>
                            <div class="form-check form-switch mb-4">

                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="publish" checked="">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Publish.</label>
                            </div>
                        </div>
                        <div class="align-content-center text-center align-center">
                            <button type="submit" class="btn bg-gradient-success btn-lg mt-4 mb-4">{{ 'Save Post' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


@endsection

