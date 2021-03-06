@extends('auth.authLayouts.adminlayout')
@section('title','Recent Activities')
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

        <div class="col-md-12">
            <div class="card d-block">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h1>Recent Activities</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('activities.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">


                    @if($activities->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Image</td>
                            <td>Title</td>
                            <td>Action</td>
                        </tr>
                         @foreach ($activities as $key => $n)
                        <tr>
                        <td>{{ ($activities->currentpage()-1) * $activities->perpage() + $key + 1 }}</td>
                        <td><img src="{{asset('storage/' . $n->file) }}" style="height: 100px; width: 200px"></td>
                        <td>{{ $n->title }}</td>
                        {{-- <td>{{ $n->description }}</td> --}}
                        <td>
                            <form action="{{ route('activities.destroy', $n->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="{{ route('activities.edit', $n->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('activities.show', $n->id) }}" class="btn btn-primary btn-sm">View</a>
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No Recent Activities yet! </h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-12">
            {{ $activities->links() }}
        </div>
    </div>
</div>
@endsection
