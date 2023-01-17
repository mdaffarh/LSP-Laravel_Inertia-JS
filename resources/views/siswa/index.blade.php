@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA SISWA</h2>
            <a href="/siswa/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>JENIS KELAMIN</th>
                    <th>KELAS</th>
                    <th>PASSWORD</th> 
                    <th>ACTION</th>
                </tr>
                @foreach ($siswa as $s) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->kelas->nama_kelas }}</td>
                        <td>{{ $s->password }}</td>
                        <td>
                            <a href="/siswa/edit/{{ $s->id }}" class="button-warning">EDIT</a>
                            <a href="/siswa/destroy/{{ $s->id }}" class="button-danger" onclick="return confirm('Anda Akan Menghapus Data Ini?')">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection