<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Gudang</title>
</head>
<body>
    <table border="1px" table table-striped>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
        <tr>
            <td>{{++$no}}</td>
            <td>{{ $pemain->nama_pemain }}</td>
            <td>{{ $pemain->no_punggung}}</td>
            <td>{{ $pemain->posisi}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>