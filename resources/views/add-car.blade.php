
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Peminjaman Mobil</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h3>Tambah Mobil Baru</h3>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('addcaraction') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Merek</label>
                    <input type="text" name="merek" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nomor Plat</label>
                    <input type="text" name="nomor_plat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tarif Sewa per Hari</label>
                    <input type="number" step="0.01" min="0"  name="tarif_sewa" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Mobil</button>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
