@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA JURUSAN</h2>
        <form action="/jurusan/update/{{ $jurusan->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA JURUSAN</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" required>
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
