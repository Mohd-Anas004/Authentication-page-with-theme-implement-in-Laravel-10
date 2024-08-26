@extends('admin.layout.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>State</title>

    </head>

    <body>
        <div class="content-wrapper">
            <a href="{{ route('import') }}" class="btn btn-success float-end mb-4">Import</a>
            <a href="{{ route('statecreate') }}" class="btn btn-success float-start mb-4">Add State</a>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>

                        <th scope="col">State</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($data) --}}


                    @foreach ($data as $val)
                        <tr>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->status }}</td>
                            <td>
                                <a href="{{ route('editstate', $val->id) }}"
                                    class="btn btn-success btn-hover btn-sm text-white">Edit</a>
                                <a href="{{ route('deletestate', $val->id) }}"
                                    class="btn btn-danger btn-hover btn-sm text-white">Delete</a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
                <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
            </table>
        </div>

    </body>

    </html>
@endsection
