@extends('layouts.read')

@section('content')
    <section class="py-5 bg-gray-100 mt-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{url('uploads/',$post->image)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg h-50">
                            </a>
                        </div>
                        <div class="card-body px-0 pt-4">
                            <p class="text-gradient text-primary text-gradient font-weight-bold text-sm text-uppercase">
                               By: {{$post->user->name}}</p>

                                <h4>
                                    {{$post->title}}
                                </h4>

                            {!!$post->content  !!}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
