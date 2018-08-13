@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>

        <div class="card">
                <div class="card-header">Profil</div>
                <br>

    <div class="card-body">
        <table class="table">
            <tbody>
            <tr>
                <td class="text-muted">Nama</td>
                <td>{{ auth()->user()->name }}</td>
            </tr>
                
                <tr>
                    <td class="text-muted">Email</td>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection