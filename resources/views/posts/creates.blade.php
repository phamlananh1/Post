@extends('home-page.index')
@section('title', 'edit')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Add new post</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label >Content</label>
                    <textarea class="form-control" rows="3" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Description</label>
                    <input type="text" name="descrip" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
@endsection

