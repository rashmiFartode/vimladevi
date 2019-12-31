@extends('auth.authLayouts.adminlayout')

@if(isset($category))
@section('title','Edit Category')
@else
@section('title','Create Category')
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
                <div class="card-header"> {{ isset($category) ?  'Update' :  'Create' }}  Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.categories.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
