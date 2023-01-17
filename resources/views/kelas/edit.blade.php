@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA KELAS</h2>
        <form action="/kelas/update/{{ $kelas->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jurusan</td>
                    <td class="bar">
                        <select name="jurusan_id" id="">
                            <option value="" disabled ></option>
                            @foreach ($jurusan as $j)
                                @if ($kelas->jurusan_id == $j->id)
                                    <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
                                @else
                                    <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                                @endif   
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Update" class="button-primary">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection
