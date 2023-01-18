@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA NILAI</h2>
        <form action="/nilai/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">    
                        <select name="mengajar_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($mengajar as $m)
                                <option value="{{ $m->id }}">{{ $m->guru->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA SISWA</td>
                    <td class="bar">    
                        <select name="siswa_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="number" name="uh" id="">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="number" name="uts">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="number" name="uas">
                    </td>
                </tr>
                <tr>
                    <td class="bar">NA</td>
                    <td class="bar">
                        <input type="number" name="na">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Submit">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection