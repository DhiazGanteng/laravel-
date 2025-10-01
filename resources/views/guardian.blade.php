<x-layout> 
    <x-slot:judul> {{$title}}</x-slot:judul>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
        }
    </style>

    <h2>Daftar Guardian</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guardians as $guardian)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $guardian ['name']}}</td>
                <td>{{ $guardian ['job'] }}</td>
                <td>{{ $guardian ['phone'] }}</td>
                <td>{{ $guardian ['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>