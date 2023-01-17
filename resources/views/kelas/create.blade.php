@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA KELAS</h2>
        <form action="/kelas/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <input type="text" name="nama_kelas" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jurusan</td>
                    <td class="bar">
                        <select name="jurusan_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
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
