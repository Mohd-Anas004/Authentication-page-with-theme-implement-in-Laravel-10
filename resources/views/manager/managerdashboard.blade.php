@extends('admin.layout.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Managers</title>

        <style>
            .table img {
                max-height: 100px;
                max-width: 80px;
            }

            .alert-info {
                margin-bottom: 1rem;
            }

            .action-btns {
                display: flex;
                gap: 0.5rem;
            }

            .container {
                position: absolute;
                display: inline;
                flex-direction: row;
            }
        </style>
        @include('admin.layout.style')
    </head>

    <body>
        <div class="content-wrapper">

            <a class="btn btn-primary btn-hover text-black float-end mb-2px" href="{{ route('managerdashboard') }}"><i
                    class="fa-solid fa-arrow-left"></i>Back</a>
            <a href="{{ route('managercreate') }}" class="btn btn-success float-start text-black mb-4"><i
                    class="fa-solid fa-user-plus"></i>Manager </a>
            <div class="container">

                <form action="{{ route('managerdashboard') }}" method="get">
                    <input type="search" name="search" id="search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <table class="table table-secondary table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>

                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if (!empty($message))
                        <div class="alert  container">
                            {{ $message }}
                        </div>
                    @endif
                    @foreach ($data as $key => $val)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->age }}</td>
                            <td>{{ $val->gender }}</td>
                            <td>{{ $val->address }}</td>
                            <td>{{ $val->image }}
                                <img src="{{ asset('images/' . $val->image) }}" height="100px" width="100px"
                                    alt="No image found">
                            </td>
                            <td>{{ $val->status }}</td>
                            <td><a class="btn btn-secondary btn-bg text-black"
                                    href="{{ url('images/' . $val->image) }}
                                "download><i
                                        class="fa-solid fa-download"></i></a>

                                <a href="{{ route('editmanager', $val->id) }}"
                                    class="btn btn-success btn-hover btn-bg text-black"><i
                                        class="fa-solid fa-square-pen"></i></a>
                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                <form action="{{ route('deletemanager', $val->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="manager"
                                        class="btn btn-danger manager btn-hover btn-sm text-black"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>


                            </td>
                            <td>
                            <td>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <form class="toggleForm" action="{{ route('status', $val->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-sm">
                                        <i class="statusIcon fa {{ $val->status === 'active' ? 'fa-toggle-on' : 'fa-toggle-off' }}"
                                            style="font-size: 24px;"></i>
                                    </button>
                                </form>
                            </td>
                            </td>
                        </tr>
                    @endforeach



                </tbody>

            </table>
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
        @include('admin.layout.script')


        <script>
            $(document).ready(function() {
                // Handle delete action with SweetAlert
                $('.manager').on('click', function(e) {
                    e.preventDefault();

                    const form = $(this).closest('form');
                    const url = form.attr('action');

                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this record!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: url,
                                type: 'DELETE',
                                data: {
                                    _token: $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    swal({
                                        title: "Deleted!",
                                        text: response.success,
                                        icon: "success",
                                        buttons: "OK",
                                    }).then(() => {
                                        form.closest('tr').remove();
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error("Error deleting data:", xhr.responseText);
                                    swal("Oops!",
                                        "Something went wrong. Please try again later.",
                                        "error");
                                }
                            });
                        } else {
                            swal("Your record is safe!");
                        }
                    });
                });
            });
            // Handle status toggle action with SweetAlert
        </script>
        <script>
            $(document).ready(function() {
                $('.toggleForm').on('submit', function(e) {
                    e.preventDefault();


                    var form = $(this);
                    var icon = form.find('.statusIcon');

                    $.ajax({
                        url: form.attr('action'),
                        method: 'POST',
                        data: form.serialize(),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status === 'active') {
                                icon.removeClass('fa-toggle-off').addClass('fa-toggle-on');
                                Swal.fire({
                                    title: 'Activated!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            } else {
                                icon.removeClass('fa-toggle-on').addClass('fa-toggle-off');
                                Swal.fire({
                                    title: 'Deactivated!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: 'Error!',
                                text: xhr.responseJSON?.error ||
                                    'Something went wrong. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            });
        </script>

    </body>

    </html>
@endsection
