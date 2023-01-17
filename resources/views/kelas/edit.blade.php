@extends('main.layout')
@section('content')
<center>
    <h2>EDIT DATA KELAS</h2>
    <form action="/kelas/update/{{ $kelas->id }}" method="post">
        @csrf 
        <table width="50%">
            <tr>
                <td width="25%">KELAS</td>
                <td><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
            </tr>
            <tr>
                <td width="25%">JURUSAN</td>
                <td width="25%">
                    <select name="jurusan_id">
                        <option></option>
                        @foreach ($jurusan as $j)
                        @if ($kelas->jurusan_id == $j->id)
                        <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
