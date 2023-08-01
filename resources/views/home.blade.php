@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://miro.medium.com/v2/resize:fit:2400/1*B6_f-_SxscJ9FCuIjOrQAQ.jpeg" width="80%" height="100%" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong>posts</div>
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
            <div class="col-4">
                <img src="/images/car.jpeg" class="img-responsive" width="100%" height="60%" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/milk.jpeg" class="img-responsive" width="100%" height="60% "class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/vacation.jpeg" class="img-responsive" width="100%" height="60% "class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
