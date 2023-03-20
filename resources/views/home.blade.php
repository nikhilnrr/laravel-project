@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class = "container">
            <div class = "row">
                <div class = "col-3 pb-5">
                    <img src="https://picsum.photos/150/150" class="rounded-circle p-5" alt="">
                </div>
                <div class = "col-9 p-5">
                    <div class="d-flex justify-content-between">
                        <h1>{{ $user->username }}</h1>
                        <a href="#">Add New Post</a>
                    </div>
                    <div class = "d-flex">
                        <div class = "pe-5"><strong>153</strong> Posts</div>
                        <div class = "pe-5"><strong>23K</strong> Followers</div>
                        <div class = "pe-5"><strong>213K</strong> Following</div>
                    </div>
                    <div class = "pt-1 fw-bold">{{ $user->profile->title }}</div>
                    <div>{{ $user->profile->description }}</div>
                    <div>
                        <a href="#" class="text-reset">{{ $user->profile->url }}</a>
                    </div>
                </div>
                <div class = "row pt-5">
                    <div class = "col-4">
                        <img src="https://picsum.photos/400/400" alt = "#"></a>
                    </div>
                    <div class = "col-4">
                        <img src="https://picsum.photos/400/400" alt = "#"></a>
                    </div>
                    <div class = "col-4">
                        <img src="https://picsum.photos/400/400" alt = "#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
