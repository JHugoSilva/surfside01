@extends('layouts/layout')
@section('content')
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5">
<div class="card">
    <div class="card-header">
            All New Post
    </div>
    <div class="card-body">
        @if (Session::has('post_created'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('post_created')}}
                </div>
        @endif
        <form method="POST" action="{{route('post.addsubmit')}}">
                @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Post Title"/>
            </div>
            <div class="form-group">
                <label for="body">Post Description</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-success"/>
        </form>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>
    
@endsection