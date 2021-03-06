@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="img/logo.png" alt="" width="200px">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> follwers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="img/sample1.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/sample2.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/sample3.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection