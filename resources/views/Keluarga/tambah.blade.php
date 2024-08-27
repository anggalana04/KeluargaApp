@extends('layouts.app')

@section('title', 'Input')

@section('content')

    <form action="/tambah-keluarga" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" class="text" name="nama">
        <label>Hubungan</label>
        <input type="text" class="text" name="hubungan">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <input type="submit" class="submit">
    </form>

@endsection