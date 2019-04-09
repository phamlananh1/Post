@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách bai viet</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên bai viet</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Mieu ta</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            @if($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" alt=""
                                     style="width: 200px; height: 200px">
                            @else
                                {{'Chưa có ảnh'}}
                            @endif
                        </td>
                        <td>{{ $post->description }}</td>
                        <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-warning">Show</a></td>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('posts.creates') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
@endsection


