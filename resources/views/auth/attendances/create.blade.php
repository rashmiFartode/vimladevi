@extends('auth.authLayouts.adminlayout')

@if(isset($attendance))
@section('title','Edit Attendances')
@else
@section('title','Create Attendances')
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
                <div class="card-header"> {{ isset($attendance) ?  'Update' :  'Add' }}  Attendances</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.attendances.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
