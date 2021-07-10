<!DOCTYPE html>
<html>

<head>
    <style>
        #pegawai {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #pegawai td,
        #pegawai th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #pegawai tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pegawai tr:hover {
            background-color: #ddd;
        }

        #pegawai th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <table id="pegawai">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No. Telephone</th>
        </tr>
        @php
        $no = 1 ;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++.'.' }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jeniskelamin }}</td>
            <td>0{{ $row->notelpon }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>