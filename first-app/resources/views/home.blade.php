@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2024/06/img_12--1-.jpg" alt="logo"
                style="height: 50px; border-right: 1px solid #333333;" class="pr-3" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <!-- <h1><?=$user?></h1> -->
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2024/06/img_12--1-.jpg" alt="logo"
                class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2024/06/img_12--1-.jpg" alt="logo"
                class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.freecodecamp.org/news/content/images/size/w2000/2024/06/img_12--1-.jpg" alt="logo"
                class="w-100">
        </div>
    </div>
</div>
@endsection