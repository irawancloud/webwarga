@section('title')
Edit Article
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Artikel</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('post', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-validate">
                                <label for="exampleFormControlInput1">Judul Artikel</label>
                                <input type="text" name="blog_title" class="form-control @error('blog_title') is-invalid @enderror" id="exampleFormControlInput1" required autofocus value="{{ $data->blog_title }}" readonly>
                                @error('blog_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Slug</label>
                                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="exampleFormControlInput1" value="{{ $data->slug }}" readonly>
                                @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img class="img rounded" src="/upload/{{ $data->blog_image }}" alt="blog" width="150px">
                                <label for="exampleFormControlFile1">Photo Artikel </label>
                                <input type="file" name="blog_image" class="form-control-file @error('blog_image') is-invalid @enderror" id="exampleFormControlFile1">
                                <small class="text-danger">*File size max 2mb</small>
                                @error('blog_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kategori</label>
                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="exampleFormControlInput1" value="{{ $data->category }}" required>
                                @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Artikel</label>
                                <textarea name="article" class="form-control" id="editor" rows="5" value="{{ $data->article }}">{{ $data->article }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Post">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
