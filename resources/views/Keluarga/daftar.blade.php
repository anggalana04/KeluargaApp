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
            <td><a href="{{ route('Keluarga.show', $Keluarga->id) }}">View Details</a>
                <a href="{{ route('Keluarga.edit', $Keluarga->id) }}">Edit</a>
                <form action="{{ route('Keluarga.destroy', $Keluarga->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Beneran Mau Dihapus?');">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection