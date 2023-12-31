@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://miro.medium.com/v2/resize:fit:2400/1*B6_f-_SxscJ9FCuIjOrQAQ.jpeg" width="80%" height="100%" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts</div>
                <div class="pr-5"><strong>23k </strong>followers</div>
                <div class="pr-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}} </div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div>
        <div class="row pt-4">
            @foreach ($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{$post->image}}" class="img-responsive" width="100%" height="90%" class="w-100">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
