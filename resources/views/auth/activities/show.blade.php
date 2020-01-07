@extends('auth.authLayouts.adminlayout')


@section('title','show Activities')

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
                <img src="{{asset('storage/' . $activity->file) }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $activity->title }}</h5>
                    <p class="card-text">{{ $activity->description }}</p>
                </div>
                <div class="card-body">
                    <a href="{{ route('activities.index') }}" class="btn btn-info">Back</a>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
