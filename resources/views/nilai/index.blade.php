@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA NILAI</h2>
            <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NAMA GURU</th>
                    <th>NAMA SISWA</th>
                    <th>UH</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>NA</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($nilai as $n)     
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->mengajar->guru->nama_guru }}</td>
                        <td>{{ $n->siswa->nama_siswa }}</td>
                        <td>{{ $n->uh }}</td>
                        <td>{{ $n->uts }}</td>
                        <td>{{ $n->uas }}</td>
                        <td>{{ $n->na }}</td>
                        <td> 
                            <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>
                            <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('Anda Akan Menghapus Data Ini?')">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection