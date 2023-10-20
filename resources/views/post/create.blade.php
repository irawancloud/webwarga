@section('title')
Add Article
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Input Artikel</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-validate">
                                <label for="blog_title">Judul Artikel</label>
                                <input type="text" name="blog_title" class="form-control @error('blog_title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Judul Artikel" required autofocus value="{{ old('blog_title') }}">
                                @error('blog_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="blog_image">Photo Artikel </label>
                                <input type="file" name="blog_image" class="form-control-file @error('blog_image') is-invalid @enderror" id="blog_image" required>
                                <small class="text-danger">*File size max 2mb</small>
                                @error('blog_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Kategori" required>
                                @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="article">Artikel</label>
                                <textarea name="article" class="form-control" id="editor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Post">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
