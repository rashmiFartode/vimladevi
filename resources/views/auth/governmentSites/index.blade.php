@extends('auth.authLayouts.adminlayout')
@section('title','Government site link')
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
                            <h1>Government site link</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('governmentSites.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if($governmentSites->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. No.</td>
                            <td>Name</td>
                            <td>Links</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($governmentSites as $key => $governmentSite)
                        <tr>
                            <td>{{ ($governmentSites->currentpage()-1) * $governmentSites->perpage() + $key + 1 }}</td>
                            <td>{{ $governmentSite->name }}</td>
                            <td>{{ $governmentSite->link }}</td>
                            <td>
                                <form action="{{ route('governmentSites.destroy', $governmentSite->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('governmentSites.edit', $governmentSite->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No entry yet! </h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-10">
            {{ $governmentSites->links() }}
        </div>
    </div>
</div>
@endsection
