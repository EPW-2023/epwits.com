@extends('layout.admin')
@section('content')
    <div class="container">
        <h1>Shortlink</h1>
        <p>Read our guidelines <a href="#">here</a>. If there's a problem, make sure to <a
                href="https://epwits.org/calldevnow">contact us</a>
        </p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Short</th>
                    <th class="text-center">Original</th>
                    <th class="text-center">Created By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shortlinks as $item)
                    <tr>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">
                            <a href="https://epwits.org/{{ $item->short }}" class="text-decoration-none"
                                target="_blank">https://epwits.org/{{ $item->short }}</a>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ $item->original }}" class="btn btn-primary original-link"
                                    target="_blank">Go to original link</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $item->user->username }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            <a href="/admin/shortlink/create" class="btn btn-primary">Create</a>
        </div>
    </div>
@endsection
