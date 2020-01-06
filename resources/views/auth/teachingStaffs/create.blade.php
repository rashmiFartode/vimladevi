@extends('auth.authLayouts.adminlayout')

@if(isset($teachingStaff))
@section('title','Edit Teaching Staff')
@else
@section('title','Add Teaching Staff')
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
                <div class="card-header"> {{ isset($teachingStaff) ?  'Update' :  'Add' }} Teaching Staff</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.teachingStaffs.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
