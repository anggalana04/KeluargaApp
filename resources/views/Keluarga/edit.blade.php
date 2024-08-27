@extends('layouts.app')

@section('title', 'keluargaKu!')

@section('content')
    <h1>EDIT KELUARGA</h1><br>
    <form action="{{ route('Keluarga.update', $Keluarga->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $Keluarga->nama }}" required>
    
        <label for="hubungan">Hubungan:</label>
        <input type="text" id="hubungan" name="hubungan" value="{{ $Keluarga->hubungan }}" required>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    
        <button type="submit">Update</button>
    </form>
@endsection