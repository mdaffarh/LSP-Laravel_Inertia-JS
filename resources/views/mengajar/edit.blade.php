@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA MENGAJAR</h2>
        <form action="/mengajar/update/{{ $mengajar->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}" {{ $g->id ==  $mengajar->guru_id ? 'selected' : ''  }}>{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">MAPEL</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}" {{ $m->id ==  $mengajar->mapel_id ? 'selected' : ''  }}>{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $k->id ==  $mengajar->kelas_id ? 'selected' : ''  }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Update" class="button-primary" >
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection