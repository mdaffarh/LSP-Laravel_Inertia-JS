@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA MATA PELAJARAN</h2>
        <form action="/mapel/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Submit" class="button-primary">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection
