<!-- home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Sewa Mobil</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">SEWA MOBIL</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{Auth::user()->email}} <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a>Level: {{Auth::user()->role}}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
            <h4>Selamat Datang, <b>{{Auth::user()->name}}</b>.</h4>
        </div>
        <div>
            <button type='button' onclick="window.location='{{ route('add-car') }}'">PENAMBAHAN MOBIL</button>
            <button type='button' onclick="window.location='{{ route('rental') }}'">PEMINJAMAN MOBIL</button>
            <button>PENGEMBALIAN MOBIL</button>
        </div>
        <div>
        <h2>Daftar Mobil</h2>
          <table class="table">
              <thead>
                  <tr>
                      <th>Merek</th>
                      <th>Model</th>
                      <th>Nomor Plat</th>
                      <th>Tarif Sewa</th>
                  </tr>
              </thead>
              <tbody>
              @if(isset($allCars))
                  @foreach ($allCars as $car)
                      <tr>
                          <td>{{ $car->merek }}</td>
                          <td>{{ $car->model }}</td>
                          <td>{{ $car->nomor_plat }}</td>
                          <td>{{ $car->tarif_sewa }}</td>
                      </tr>
                  @endforeach
                  @else
                  <!-- $allCars is not set -->
                  <p>$allCars is not set.</p>
              @endif
              </tbody>
          </table>
        </div>
        <!-- <h2>Daftar Mobil</h2> -->
        <div>
        <!-- @if(isset($allCars) && $allCars->count() > 0) -->
        <!-- @else
          <br/>
          <br/>
          <p>Tidak ada mobil yang tersedia.</p>
        @endif -->
        </div>

        </div>        
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
