<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container" style="text-align: center; padding-top: 20px; padding-bottom: 40px;">
            <h2>Data Kontak</h2>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($kontak as $p)
                    <tr>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->notelp}}</td>
                        <td>
                            <a href="/edit/{{$p->id}}">Edit</a>
                            <a href="/hapus/{{$p->id}}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div style="justify-content: center; align-items: center;">
            <a href="/tambah" class="button">Input Data</a>
        </div>
    </div>

</body>

</html>