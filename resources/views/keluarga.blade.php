<!DOCTYPE html>
<html>
<head>
    <title>Data Keluarga</title>
</head>
<body>
    <h3>Data Keluarga KK</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>ID KK</th>
            <th>Nomor KK</th>
            <th>Kepala Keluarga</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
        </tr>
        @php $no = 1; @endphp
        @foreach($keluarga as $k)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $k->kk_id }}</td>
            <td>{{ $k->kk_nomor }}</td>
            <td>{{ $k->kepala_keluarga_warga_id }}</td>
            <td>{{ $k->alamat }}</td>
            <td>{{ $k->rt }}</td>
            <td>{{ $k->rw }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
