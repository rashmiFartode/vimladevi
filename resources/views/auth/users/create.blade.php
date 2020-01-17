@extends('auth.authLayouts.adminlayout')

@if(isset($user))
@section('title','Edit user')
@else
@section('title','Create user')
@endif

@section('customcss')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <style>
    .btn-info
    {
        color: white;
    }
    </style>
@endsection
@section('customscripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
     $('#auth').select2();
    });
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($user) ?  'Update' :  'Add' }} User</div>

                <div class="card-body">
                    <form method="POST" action="{{  isset($user) ? route('users.update', $user->id) : route('users.store') }}">
                        @csrf
                        @if (isset($user))
                            @method('PUT')
                        @endif
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($user) ? $user->email :old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if (!$user)
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        @endif
                        <div class="form-group row">
                            <label for="auth" class="col-md-4 col-form-label text-md-right">{{__('Authorization')}}</label>

                            <div class="col-md-6">
                                @php
                                    $auth= $user->auth;
                                    $authexplode = explode(',', $auth);
                                @endphp
                                <select class="auth form-control @error('auth') is-invalid @enderror" name="auth[]" id="auth"  multiple="multiple" required>
                                    <option value="blog" @if ($user)
                                    {{ in_array("blog", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >Blog</option>

                                    <option value="quicklinks"
                                    @if ($user)
                                    {{ in_array("quicklinks", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >Quicklinks</option>

                                    <option value="gallery"
                                    @if ($user)
                                    {{ in_array("gallery", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >Gallery</option>

                                    <option value="site"
                                    @if($user)
                                     {{ in_array("site", $authexplode)?  'selected' :  '' }}
                                     @endif
                                     >Official Government Sites</option>

                                    <option value="links"
                                    @if($user)
                                    {{ in_array("links", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >Important Links</option>

                                    <option value="etenders"
                                    @if($user)
                                    {{ in_array("etenders", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >E-Tenders notice</option>

                                    <option value="attendances"
                                    @if($user)
                                    {{ in_array("attendances", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >Attedances</option>

                                    <option value="news"
                                    @if($user)
                                    {{ in_array("attendances", $authexplode)?  'selected' :  '' }}
                                    @endif
                                    >News</option>

                                    <option value="results"
                                    @if($user)
                                    {{ in_array("news", $authexplode)?  'selected' :  '' }}
                                     @endif
                                    >Results</option>

                                    <option value="activities"
                                    @if($user)
                                    {{ in_array("activities", $authexplode)?  'selected' :  '' }}
                                     @endif
                                    >Recent Activities</option>

                                    <option value="teaching_staff"
                                    @if($user)
                                    {{ in_array("teaching_staff", $authexplode)?  'selected' :  '' }}
                                     @endif
                                    >Teaching Staff</option>
                                </select>
                                @error('auth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="blog" value="blog" name="auth[blog]">
                                    <label class="form-check-label" for="blog">Blog</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="quicklinks" value="quicklinks" name="auth[quicklinks]">
                                    <label class="form-check-label" for="quicklinks">Quicklinks</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="gallery" value="gallery" name="auth[gallery]">
                                    <label class="form-check-label" for="gallery">Gallery</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="site" value="site" name="auth[site]">
                                    <label class="form-check-label" for="site">Site</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="links" value="links" name="auth[links]">
                                    <label class="form-check-label" for="links">Links</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="etenders" value="etenders" name="auth[etenders]">
                                    <label class="form-check-label" for="etenders">E-tenders</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="attedances" value="attendances" name="auth[attendances]">
                                    <label class="form-check-label" for="attendances">Attendances</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="news" value="news" name="auth[news]">
                                    <label class="form-check-label" for="news">News</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="results" value="results" name="auth[results]">
                                    <label class="form-check-label" for="results">Results</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="activities" value="activities" name="auth[activities]">
                                    <label class="form-check-label" for="activities">activities</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="teaching_staff" value="teaching_staff" name="auth[teaching_staff]">
                                    <label class="form-check-label" for="teaching_staff">Teaching_staff</label>
                                </div> --}}

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ route('users.index')}}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






