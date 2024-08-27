@extends('layouts.app')

@section('title', 'detail')

@section('content')

<h1>Keluarga Details</h1>

<div>
    <p><strong>ID:</strong> {{ $Keluarga->id }}</p>
    <p><strong>Nama:</strong> {{ $Keluarga->nama }}</p>
    <p><strong>Hubungan:</strong> {{ $Keluarga->hubungan }}</p>
</div>

<a href="/">Back to List</a>

@endsection