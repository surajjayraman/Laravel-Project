@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection