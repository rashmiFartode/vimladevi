@extends('auth.authLayouts.adminlayout')

@if(isset($activities))
@section('title','Edit Activities')
@else
@section('title','Add Recent Activities')
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
                <div class="card-header"> {{ isset($activities) ?  'Update' :  'Add' }}  Recent Activities</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.activities.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
