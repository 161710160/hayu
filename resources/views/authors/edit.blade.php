@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Penulis</li>
                
            </ul>

<div class="card">
    <div class="card-header">Ubah Penulis</div>
                <br>
            <div class="card-body">
            {!! Form::model($author, ['url' => route('authors.update', $author->id),
            'method'=>'put', 'class'=>'form-horizontal']) !!}
            @include('authors._form')
            {!! Form::close() !!}
            </div>
            </div>
     </div>
    </div>
</div>

@endsection