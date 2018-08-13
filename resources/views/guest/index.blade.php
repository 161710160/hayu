@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Daftar Buku dan Penulis</div>
                <br>


                    <div class="panel-body">
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