@section('title')
Add Image Gallery
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Input Image Gallery</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('imageGallery') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-validate">
                                <input type="hidden" name="image_id" class="form-control @error('image_id') is-invalid @enderror" id="image_id">
                                @error('image_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_name">Image Gallery </label>
                                <input type="file" name="image_name" class="form-control-file @error('image_name') is-invalid @enderror" id="image_name" required>
                                <small class="text-danger">*File size max 2mb</small>
                                @error('image_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mb-5"></div>
</section>
@endsection
