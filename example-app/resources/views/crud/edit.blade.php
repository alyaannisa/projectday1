<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

</head>
<body>
<div class="container mt-5">
    <div>
        <div class="container" style="text-align: center; padding-bottom: 20px;">
            <h1>Edit Data</h1>
        </div>
        <div>
            @foreach($kontak as $p)
            <form action="/update" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$p->id}}"></br>
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" required="required" value="{{$p->nama}}"></br>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Masukkan Email" required="required" value="{{$p->email}}"></br>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input name="notelp" type="text" class="form-control" placeholder="Masukkan Nomor Telepon" required="required" value="{{$p->notelp}}"></br>
                </div>
                <div>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="/">Kembali</a>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>