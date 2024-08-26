@extends('admin.layout.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="content-wrapper">

            <a href="{{ route('citycreate') }}" class="btn btn-success float-start mb-4">Add City</a>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>

                        <th scope="col">City</th>
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
                            <td>{{ $val->state }}</td>
                            <td>{{ $val->status }}</td>


                            <td>
                                <a href="{{ route('editcity', $val->id) }}"
                                    class="btn btn-success btn-hover btn-sm text-white">Edit</a>
                                <a href="{{ route('deletecity', $val->id) }}"
                                    class="btn btn-danger btn-hover btn-sm text-white">Delete</a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
                <a href="{{ route('view') }}" class="btn btn-danger float-center  mb-4">Back</a>
            </table>
        </div>
        <script src="https://kit.fontawesome.com/bf3e0f15c6.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
