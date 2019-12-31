@extends('auth.authLayouts.adminlayout')

@if(isset($governmentSite))
@section('title','Edit Government site links')
@else
@section('title','Create Government site links')
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
                <div class="card-header"> {{ isset($governmentSite) ?  'Update' :  'Create' }}  Government site links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.governmentSites.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
