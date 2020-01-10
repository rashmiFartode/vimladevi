@extends('auth.authLayouts.adminlayout')
@section('title','Attendances')
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
                            <h1>Attendances</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('attendances.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if($attendances->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Title</td>
                            <td>File</td>
                            <td></td>
                        </tr>
                        @php
                        //     if($results->currentPage()->true)
                        //     {
                        //         $i= 1 + 10;
                        //     }
                        // $i=1;

                        @endphp
                         @foreach ($attendances as $key => $n)
                        <tr>
                        <td>{{ ($attendances->currentpage()-1) * $attendances->perpage() + $key + 1 }}</td>
                        <td>{{ $n->title }}</td>

                            <td><a href="{{asset('storage/' . $n->file) }}" class="btn btn-info btn-sm" target="_blank"> View</a></td>
                            <td>
                                <form action="{{ route('attendances.destroy', $n->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('attendances.edit', $n->id) }}"
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

        <div class="col-md-12">
            {{ $attendances->links() }}
        </div>
    </div>
</div>
@endsection
