@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA GURU</h2>
        <form action="/guru/update/{{ $guru->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIP</td>
                    <td class="bar">
                        <input type="number" name="nip" value="{{ $guru->nip }}" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">
                        <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : '' }}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $guru->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">ALAMAT</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="5">{{ $guru->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="text" name="password" value="{{ $guru->password }}" required>
                    </td>
                </tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="Submit" class="button-primary">
                    </center>
                </td>
            </table>
        </form>
    </center>
@endsection
