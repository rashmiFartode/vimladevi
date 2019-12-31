@extends('auth.authLayouts.adminlayout')
@section('title','Quicklinks')
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

        <div class="col-md-10">
            <div class="card d-block">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h1>Quicklinks</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('quicklink.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('danger'))
                    <div class="alert alert-success" role="alert">
                        {{ session('danger') }}
                    </div>
                    @endif
                    @if($quicklinks->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. No.</td>
                            <td>Name</td>
                            <td>Links</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($quicklinks as $key => $quicklink)
                        <tr>
                            <td>{{ ($quicklinks->currentpage()-1) * $quicklinks->perpage() + $key + 1 }}</td>
                            <td>{{ $quicklink->name }}</td>
                            <td>{{ $quicklink->link }}</td>
                            <td>
                                <form action="{{ route('quicklink.destroy', $quicklink->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('quicklink.edit', $quicklink->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No quicklinks yet! </h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-10">
            {{ $quicklinks->links() }}
        </div>
    </div>
</div>
@endsection
