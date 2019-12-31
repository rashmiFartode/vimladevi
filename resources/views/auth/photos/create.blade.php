@extends('auth.authLayouts.adminlayout')

@if(isset($photo))
@section('title','Edit photos')
@else
@section('title','Create photos')
@endif
@section('customcss')
    <style>
    .btn-info
    {
        color: white;
    }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($photo) ?  'Update' :  'Create' }}  E-Tender</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.photos.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
