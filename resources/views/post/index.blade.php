@section('title')
Posting Blog
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content" class="no-sidebar">
    <div class="container">
        <!-- DataTable -->
        <div class="row mb-3">
            <div class="col-lg-6">
                <h4>Daftar Posting Blog</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('post.create') }}">
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
                            <th>Judul Blog</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Categori</th>
                            <th>Artikel</th>
                            <th>User input</th>
                            {{-- <th>Status</th> --}}
                            <th>Waktu input</th>
                            <th class="noExport">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->blog_title }}</td>
                            <td><a href="/upload/{{ $item->blog_image }}" target="_blank">{{ $item->blog_image }}</a></td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{!! Str::substr($item->article, 0, 100) !!}</td>
                            <td>{{ $item->user_input }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td class="align-items-center">
                                <a class="btn btn-success btn-sm" href="{{ route('post.edit', [Crypt::encrypt($item->id)]) }}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="icon-edit"></i></a>
                                <form action="{{ route('post.destroy', [Crypt::encrypt($item->id)]) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus permanen?')">
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
