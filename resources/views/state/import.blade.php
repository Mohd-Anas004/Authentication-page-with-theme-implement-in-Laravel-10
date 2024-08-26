<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import-File</title>
    @include('admin.layout.style')
    <style>
        .container {
            width: 500px;
            height: auto;
            border: solid 2px rgb(224, 223, 223);
            margin-top: 10%;
        }

        h1 {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 2%;
        }
    </style>
</head>

<body>
    <h1>Import Data</h1>

    <div class="container mt-6">
        <form action="{{ route('importdata') }}" method="post" enctype="multipart/form-data">

            <div class="row mt-6">
                <div class="form-group col-md-12">
                    <label for="file">Upload File:</label>
                    <input class="form-control" type="file" name="file" id="file">
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-hover">Import</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @include('admin.layout.script')
</body>

</html>
