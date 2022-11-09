@extends('layout.admin')
@section('content')
    <div style="overflow-x: auto">
        <div class="container">
            <h1>Shortlink</h1>
            <div class="card p-4">
                <div class="">
                    <table class="table table-bordered" style="width: 80%">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Short</th>
                                <th scope="col">Original</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shortlinks as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>https://epwits.org/{{ $item->short }}</td>
                                    <td>
                                        <a href="{{ $item->original }}"
                                            class="text-decoration-none">{{ $item->original }}</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex">
                    <a href="/admin/shortlink/create" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>
@endsection
