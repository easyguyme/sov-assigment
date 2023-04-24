@extends('layouts.user_type.auth')

@section('content')

  <div class="row">
      <div class="col-12">
          @if(session('success'))
              <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      <i class="fa fa-close" aria-hidden="true"></i>
                  </button>
              </div>
          @endif
      </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">

            <div class="col-8">

              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Draft Post(s)</p>
                <h5 class="font-weight-bolder mb-0">
                    {{$draft}}

                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Published Post(s)</p>
                <h5 class="font-weight-bolder mb-0">
                    {{$published}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @if(count($allPost)>0)
  <div class="row mt-4">
    <div class="col-lg-8 mb-lg-0 mb-4 align-content-center">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" target="_blank" href="{{route('posts.show',$latestPost->slug)}}">

                <div class="d-flex flex-column h-100">
                <p class="mb-1 pt-2 text-bold">Your latest Post</p>
                <h5 class="font-weight-bolder">{{$latestPost->title}}</h5>
                <p class="mb-5">{{$latestPost->excerpt}}.</p>
                    Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>

              </div>
                </a>


            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              <div class="card border-radius-lg h-100">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="{{url('uploads/',$latestPost->image)}}" alt="post image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endif
  <div class="row mt-4">

      <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="row">
              <div class="col-12">
                  <div class="card mb-4 ">
                      <div class="card-header pb-0">
                          <div class="d-flex flex-row justify-content-between">
                              <div>
                                  <h5 class="mb-0">All Posts</h5>
                              </div>
                              <a href="{{url('/posts/create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Post</a>
                          </div>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                          <div class="table-responsive p-0">
                              <table class="table align-items-center mb-0">
                                  <thead>
                                  <tr>
                                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          ID
                                      </th>
                                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                          Featured Image
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Title
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Slug
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Status
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Last Updated
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Action
                                      </th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @if(count($allPost)>0)
                                      @foreach($allPost as $index=>$post)
                                  <tr>
                                      <td class="ps-4">
                                          <p class="text-xs font-weight-bold mb-0">{{ $index+1 }}.</p>
                                      </td>
                                      <td>
                                          <div>
                                              <img src="{{url('uploads/',$post->image)}}" class="avatar avatar-xl me-3">
                                          </div>
                                      </td>
                                      <td class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">{{$post->title}}</p>
                                      </td>
                                      <td class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">{{$post->slug}}</p>
                                      </td>
                                      <td class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">
                                              @if($post->status=='1')
                                              Published
                                              @else
                                              Draft
                                                  @endif
                                          </p>
                                      </td>
                                      <td class="text-center">
                                          <span class="text-secondary text-xs font-weight-bold">{{$post->updated_at}}</span>
                                      </td>
                                      <td class="text-center">
                                          <a href="{{ route('posts.edit', $post->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Post">
                                              <i class="fas fa-user-edit text-secondary"></i>
                                          </a>
                                          <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                              @csrf
                                              @method('delete')
                                          <button type="button" class="btn mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete Post" onclick="confirm('{{ __("Are you sure you want to delete this post?") }}') ? this.parentElement.submit() : ''">
                                              <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                              <div class="ripple-container"></div>
                                          </button>
                                          </form>
                                      </td>
                                  </tr>
                                      @endforeach
                                  @else
                                      <tr>
                                          <td class="text-center">
                                              <p class="text-xs font-weight-bold mb-0 mx-9">No posts available at the moment</p>
                                          </td>

                                      </tr>
                                      @endif

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
@push('dashboard')

@endpush

