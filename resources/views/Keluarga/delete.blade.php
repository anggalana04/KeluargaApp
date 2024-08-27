@extends('layouts.app')

@section('title', 'keluargaKu!')

@section('content')
    <h1>List Keluarga</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>HUBUNGAN</th>
            <th>action</th>
        </tr>
        @foreach ($Keluargas as $Keluarga)
        <tr>
            <td>{{ $Keluarga->id }}</td>
            <td>{{ $Keluarga->nama }}</td>
            <td>{{ $Keluarga->hubungan }}</td>
            <td><a href="/detail">Detail</a>
                <a href="/edit">Edit</a>
                <a href="/delete">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection