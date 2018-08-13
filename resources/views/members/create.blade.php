@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Member</li>
                </ol>
            </ul>
    <div class="card">
        <div class="card-header">Tambah Member</div>
            <br>
    <div class="card-body">
        {!! Form::open(['url' => route('members.store'),
        'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
        @include('members._form')
        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection