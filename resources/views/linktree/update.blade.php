@extends('layout.admin')
@section('content')
    <div class="table-linktree">
        <div class="card card-create-link pb-5">
            <h3 class="text-center my-4">Update Linktree</h3>
            <div class="container">
                <form action="/admin/linktree/{{ $linktree->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ old('nama', $linktree->nama) }}">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link"
                            value="{{ old('link', $linktree->link) }}">
                    </div>
                    <button class="btn btn-primary">Update!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
