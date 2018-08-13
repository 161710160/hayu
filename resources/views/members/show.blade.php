@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Member</li>
                <li class="breadcrumb-item active" aria-current="page">Detail {{ $member->name }}</li>
            </ol>

        <div class="card">
            <div class="card-header">Detail {{ $member->name }}</div>
                <br>

            <div class="card-body">
                <p>Buku yang sedang dipinjam:</p>

<table class="table table-condensed table-striped">
    <thead>
    <tr>
        <td>Judul</td>
        <td>Tanggal Peminjaman</td>
    </tr>
    </thead>
<tbody>

    @forelse ($member->borrowLogs()->borrowed()->get() as $log)
        <tr>
            <td>{{ $log->book->title }}</td>
            <td>{{ $log->created_at }}</td>
        </tr>

@empty
    <tr>
        <td colspan="2">Tidak ada data</td>
    </tr>

@endforelse

    </tbody>
</table>

    <p>Buku yang telah dikembalikan:</p>
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <td>Judul</td>
                    <td>Tanggal Kembali</td>
                </tr>

    </thead>

<tbody>
    @forelse ($member->borrowLogs()->returned()->get() as $log)
        <tr>
            <td>{{ $log->book->title }}</td>
            <td>{{ $log->updated_at }}</td>
        </tr>

@empty
    <tr>
        <td colspan="2">Tidak ada data</td>
    </tr>

@endforelse
        </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection