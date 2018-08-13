@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
        <div class="card-header">Tambah Penulis</div>
        <br>
        <div class="card-body">
        {!! Form::open(['url' => route('authors.store'),
        'method' => 'post', 'class'=>'form-horizontal']) !!}
        @include('authors._form')
        {!! Form::close() !!}
    </div>
   </div>
  </div>
 </div>
</div>
@endsection