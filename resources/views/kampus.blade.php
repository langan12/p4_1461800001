<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
  <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('kampus.create') }}"> tambah data </a>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>nbi</th>
                <th>nama mahasiswa</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($kampus as $kmps)


            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $kmps->nbi}}</td>
                <td>{{ $kmps->nama_mhs }}</td>
                <td>
                    <a href="#"> Edit</a>
                    <a href="#">hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

</body>

