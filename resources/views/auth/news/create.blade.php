@extends('auth.authLayouts.adminlayout')

@if(isset($news))
@section('title','Edit News')
@else
@section('title','Create News')
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
                <div class="card-header"> {{ isset($news) ?  'Update' :  'Add' }}  News</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.news.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
