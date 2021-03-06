@extends('auth.authLayouts.adminlayout')

@if(isset($notification))
@section('title','Edit Important links')
@else
@section('title','Create Important links')
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
                <div class="card-header"> {{ isset($notification) ?  'Update' :  'Create' }}  Important Links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.notifications.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
