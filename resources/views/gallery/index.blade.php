@section('title')
Image Gallery
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content" class="no-sidebar">
    <div class="container">
        <!-- DataTable -->
        <div class="row mb-3">
            @if (session('success'))
            <div role="alert" class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                <strong><i class="fa fa-info-circle"></i> {{ session('success') }}</strong>
            </div>
            @endif
            <div class="col-lg-6">
                <h4>List Image Gallery</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('imageGallery.create') }}">
                    <button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add Record</button>
                </a>
                <div id="export_buttons" class="mt-2"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table id="datatable" class="table-bordered table-hover table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image ID</th>
                            <th>Image</th>
                            <th>Waktu input</th>
                            <th class="noExport">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->image_id }}</td>
                            <td><a href="/upload/{{ $item->image_name }}" target="_blank">{{ $item->image_name }}</a></td>
                            <td>{{ $item->created_at }}</td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-success btn-sm" href="{{ route('imageGallery.edit', [Crypt::encrypt($item->id)]) }}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>&nbsp;
                                <form action="{{ route('imageGallery.destroy', [Crypt::encrypt($item->id)]) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus permanen?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="icon-trash-2"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end: DataTable -->
    </div>
</section>
<br>
@endsection
