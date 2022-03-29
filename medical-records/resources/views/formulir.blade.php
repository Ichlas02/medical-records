<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nahzon | Data Pengiriman</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="card-title text-center mt-5">
                        Data Pasien
                    </h3>
                    <div class="card-body">
                        @if (count($errors) > 0)
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </span>
                        </div>
                        @endif

                        <!-- menambahkan query string warna dengan value biru -->
                        <form method="POST" action="/validasi" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="pasien" class="form-label">Nama Lengkap Pasien</label>
                            <select type="text" id="dokter" class="form-select">
                                <option>
                                    Barjo
                                </option>
                                <option>
                                    Udin
                                </option>
                                <option>
                                    Pepen
                                </option>
                            </select>
                        </div>
                            {{-- <div class="form-group">
                                <label for="dokter">Nama Lengkap Dokter</label>
                                <input type="text" class="form-control" value="{{ old('dokter') }}" name="dokter">
                            </div> --}}

                            <div class="form-group">
                                <label for="dokter" class="form-label">Nama Lengkap Dokter</label>
                                <select type="text" id="dokter" class="form-select">
                                    <option>
                                        Dr. Strange
                                    </option>
                                    <option>
                                        Dr. Doofenshmirtz
                                    </option>
                                    <option>
                                        Dr. Phil
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kondisi">Kondisi Kesehatan</label>
                                <input type="text" class="form-control" value="{{ old('kondisi') }}" name="kondisi">
                            </div>

                            <div class="form-group">
                                <label for="suhu">Suhu Tubuh (35 C - 45.5 C)</label>
                                <input type="text" class="form-control" value="{{ old('suhu') }}" name="suhu">
                            </div>

                            <div class="form-group">
                                <label for="image">FGambar resep</label>
                                <input type="file" class="form-control-file" value="{{ old('image') }}" name="image">
                            </div>
                            <a href="/datamedis" class="btn btn-primary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>