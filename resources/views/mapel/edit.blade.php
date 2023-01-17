@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA MATA PELAJARAN</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" required>
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
