@extends('layouts/layout')
@section('content')
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5">
<div class="card">
    <div class="card-header">
            View Post
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}"/>
            </div>
            <div class="form-group">
                <label for="body">Post Description</label>
                <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
            </div>
        </form>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>
    
@endsection