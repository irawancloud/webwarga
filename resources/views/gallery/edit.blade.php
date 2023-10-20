@section('title')
Edit Image Gallery
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Image Gallery</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('imageGallery', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <img class="img rounded" src="/upload/{{ $data->image_name }}" alt="blog" width="150px">
                                <label for="image_name">Image Gallery </label>
                                <input type="file" name="image_name" class="form-control-file @error('image_name') is-invalid @enderror" id="image_name">
                                <small class="text-danger">*File size max 2mb</small>
                                @error('image_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger">Back</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
