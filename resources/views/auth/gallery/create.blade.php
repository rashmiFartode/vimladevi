@extends('auth.authLayouts.adminlayout')

@if(isset($etender))
@section('title','Edit Gallery')
@else
@section('title','Create Gallery')
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
                <div class="card-header"> {{ isset($etender) ?  'Update' :  'Create' }}  Gallery</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.gallery.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
