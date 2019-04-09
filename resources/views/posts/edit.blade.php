@extends('home-page.index')
@section('title', 'edit')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h2>Edit post</h2>

    </div>
    <div class="col-md-12">
        <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">

                <label>Content</label>

                <textarea class="form-control" rows="3" name="content" required>{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{ $post->description }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>

    </div>

</div>


@endsection
