@extends('layout.admin')
@section('content')
    <div class="table-linktree">
        <div class="card card-create-link pb-5">
            <h3 class="text-center my-4">Create New Linktree</h3>
            <div class="container">
                <form action="/admin/linktree" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link">
                    </div>
                    <button class="btn btn-primary">Create New!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
