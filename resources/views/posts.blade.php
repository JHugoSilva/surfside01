@extends('layouts/layout')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        All-Post
                    </div>
                    <div class="card-body">
                        @if (Session::has('post_delete'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_delete')}}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Body</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <a href="/post-id/{{$post->id}}" class="btn btn-success">View</a>
                                            <a href="/post-edit/{{$post->id}}" class="btn btn-info">Edit</a>
                                            <a href="/post-delete/{{$post->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
