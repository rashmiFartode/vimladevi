@extends('auth.authLayouts.adminlayout')

@if(isset($result))
@section('title','Edit Results')
@else
@section('title','Create Results')
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
                <div class="card-header"> {{ isset($result) ?  'Update' :  'Create' }}  Results</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.results.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
