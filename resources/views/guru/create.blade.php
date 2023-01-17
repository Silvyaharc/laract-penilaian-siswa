@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>TAMBAH DATA GURU</h2>
    <form method="POST" action="/guru/store">
        @csrf 
        <table widht="50%">
            <tr>
                <td widht="25%">NIP</td>
                <td widht="25%"><input type="text" name="nip"></td>
            </tr>
            <tr>
                <td widht="25%">NAMA GURU</td>
                <td widht="25%"><input type="text" name="nama_guru"></td>
            </tr>
            <tr>
                <td widht="25%">JENIS KELAMIN</td>
                <td widht="25%">
                    <input type="radio" name="jk" value="L">Laki-laki
                    <input type="radio" name="jk" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td widht="25%">ALAMAT</td>
                <td widht="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td widht="25%">PASSWORD</td>
                <td widht="25%"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">SIMPAN</button></center>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection
