@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Buku</li>
        </ul>

            <div class="card">
                <div class="card-header">Ubah Buku</div>
                <br>
             <div class="card-body">
            {!! Form::model($book, ['url' => route('books.update', $book->id),
            'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
            @include('books._form')
            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection