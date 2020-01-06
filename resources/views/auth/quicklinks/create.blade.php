@extends('auth.authLayouts.adminlayout')

@if(isset($quicklink))
@section('title','Edit Quicklink')
@else
@section('title','Create Quicklink')
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
                <div class="card-header"> {{ isset($quicklink) ?  'Update' :  'Create' }}  Quicklinks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @include('auth.quicklinks.form')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection