@extends('auth.authLayouts.adminlayout')
@section('title','Edit profile')
@section('customcss')
<style>
    .btn-info,.btn-success {
        color: white;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card d-block mx-auto">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <h1>Edit profile</h1>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('users.update-profile', auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
