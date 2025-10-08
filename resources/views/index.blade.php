<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>
</head>
<body>
    <h1>Daftar Guru</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $index => $teacher)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->subject->name ?? 'Belum Ada' }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
