@section('title')
Add Umkm
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Input UMKM</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('seller') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-validate">
                                <label for="seller_name">Nama Seller</label>
                                <input type="text" name="seller_name" class="form-control @error('seller_name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nama Seller" required autofocus value="{{ old('seller_name') }}">
                                @error('seller_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="seller_image">Photo UMKM </label>
                                <input type="file" name="seller_image" class="form-control-file @error('seller_image') is-invalid @enderror" id="seller_image" required>
                                <small class="text-danger">*File size max 2mb</small>
                                @error('seller_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="seller_tag">Seller Tag</label>
                                <input type="text" name="seller_tag" class="form-control @error('seller_tag') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Seller Tag" required>
                                @error('seller_tag')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" class="form-control" id="editor" rows="5"></textarea>
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
</section>
@endsection
