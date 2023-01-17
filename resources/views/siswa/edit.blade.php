@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA SISWA</h2>
        <form action="/siswa/update/{{ $siswa->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" id="" value="{{ $siswa->nis }}" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA SISWA</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" id="" value="{{ $siswa->nama_siswa }}" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <select name="jk" id="">
                            <option value=""></option>
                            <option value="L" {{ $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="10">{{ $siswa->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $siswa->kelas_id == $k->id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="text" name="password" id="" value="{{ $siswa->password }}" required>
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