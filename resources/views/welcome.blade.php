@extends('layouts.blog')

@section('content')

    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row">
                @if(count($allposts) > 0)
                    @foreach($allposts as $post)
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <a href="{{route('posts.show',$post->slug)}}" class="d-block">
                                <img src="{{url('uploads/',$post->image)}}" class="img-fluid border-radius-lg">
                            </a>
                        </div>

                        <div class="card-body pt-3">

                            <a href="{{route('posts.show',$post->slug)}}" class="card-title h5 d-block text-darker">
                                {{$post->title}}
                            </a>
                            <p class="card-description mb-4">
                                {{$post->excerpt}}
                            </p>
                            <div class="author align-items-center">

                                <div class="name ps-3">
                                    <span>Post By: {{$post->user->name}}</span>
                                    <div class="stats">
                                        <small>Posted on {{$post->updated_at->format('F j, Y g:i A')}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
