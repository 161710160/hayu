@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Member</li>
                </ol>

    <div class="card">
                <div class="card-header">Member</div>
                <br>

    <div class="card-body">
        <p> <a class="btn btn-primary" href="{{ url('/admin/members/create') }}">Tambah</a></p>
            {!! $html->table(['class'=>'table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection