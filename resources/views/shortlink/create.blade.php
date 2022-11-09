@extends('layout.admin')
@section('content')
    <h1>Create New Shortern Link</h1>
    <div class="container">
        <div class="card p-4">
            <div class="container mx-auto">
                <form action="/admin/shortlink" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Nama Shortlink</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="short">Short</label>
                        <input class="form-control" type="text" id="short" name="short">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="original">Original</label>
                        <input class="form-control" type="text" id="original" name="original">
                    </div>
                    <button class="btn btn-primary" type="submit">Create!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
