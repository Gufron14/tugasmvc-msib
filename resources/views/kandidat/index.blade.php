@extends('layout/aplikasi')
@section('konten')
    <h2 class="mb-4">Daftar Kandidat</h2>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Visi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td> {{ $item -> no_kandidat }} </td>
                    <td> {{ $item -> nama }} </td>
                    <td> {{ $item -> visi }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection