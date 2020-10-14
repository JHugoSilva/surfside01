@extends('layouts/layout')
@section('title','Upload')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">
                    File Upload
                </div>
                <div class="card-body">
                    <form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Choose File</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection