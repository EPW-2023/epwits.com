@extends('layout.admin')
@section('content')
    <div class="table-linktree">
        <div class="container-table">
            <div class="card p-5">
                <div style="overflow-x: auto">
                    <div class="container">
                        <h1>Linktree</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($linktrees as $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td><a target="_blank" href="{{ $item->link }}">{{ $item->link }}</a></td>
                                        <td>
                                            <a href="/linktree/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                            <form action="/linktree/{{ $item->id }}" class="d-inline" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    onclick="return confirm('Are You Sure Deleting {{ $item->nama }}?')"
                                                    class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="container">
                    <a href="/admin/linktree/create" class="btn btn-primary">Add Linktree</a>
                </div>
            </div>
        </div>
    </div>
@endsection
