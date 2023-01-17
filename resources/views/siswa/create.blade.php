@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form action="/siswa/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" id="" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA SISWA</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" id="" required>
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <select name="jk" id="">
                            <option value="" selected disabled></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value="" disabled selected></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="text" name="password" id="" required>
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