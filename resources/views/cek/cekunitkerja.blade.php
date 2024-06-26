<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar unit kerja</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar unitkerja</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th> 
                    <th>Divisi Unit kerja</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unitkerja as $unitkerja)
                <tr>
                    <td>{{ $unitkerja->id_unitkerja }}</td> 
                    <td>{{ $unitkerja->nama_unitkerja }}</td>
                    <td>
                        <a href='' class="btn btn-primary">Edit</a>
                        <form action="r" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <br>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="unitkerja"><b>Unitkerja</label></br>
                <input type="text" class="form-control" id="unitkerja" name="unitkerja">
            </div>
        <a href="" class="btn btn-success">Tambah</a>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
