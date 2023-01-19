@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA NILAI</h2>
        <form action="/nilai/update/{{ $nilai->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">    
                        <select name="mengajar_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($mengajar as $m)
                                <option value="{{ $m->id }}" {{ $m->id == $nilai->mengajar_id ? 'selected' : '' }}>{{ $m->guru->nama_guru }}</option>
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
                                <option value="{{ $s->id }}" {{ $s->id == $nilai->siswa_id ? 'selected' : '' }}>{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="number" name="uh" id="" value="{{ $nilai->uh }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="number" name="uts" value="{{ $nilai->uts }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="number" name="uas" value="{{ $nilai->uas }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Update">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection