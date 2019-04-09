@extends('home-page.index')
@section('title', 'edit')
@section('content')

<div class="col-12">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Tên bai viet</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Mieu ta</th>
            <th></th>
            <th></th>
        </tr>

        </thead>
        <tbody>
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" style="width: 200px; height: 200px">
                @else
                    {{'Chưa có ảnh'}}
                @endif
            </td>
            <td>{{$post->description}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{ route('posts.lists') }}" class="btn btn-success">Back List</a>
    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">sửa</a></td>
    <td><a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger"
           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
    </tr>
</div>

@endsection
