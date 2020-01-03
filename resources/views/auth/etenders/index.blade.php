@extends('auth.authLayouts.adminlayout')
@section('title','E-Tenders')
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
                            <h1>E-Tenders</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('etenders.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($etenders->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Title</td>
                            <td>File</td>
                        </tr>
                         @foreach ($etenders as $key => $etender)
                        <tr>
                        <td>{{ ($etenders->currentpage()-1) * $etenders->perpage() + $key + 1 }}</td>
                        <td>{{ $etender->title }}</td>

                            <td><a href="{{asset('storage/' . $etender->etender_file) }}" class="btn btn-info btn-sm" target="_blank"> View</a></td>
                            <td>
                                <form action="{{ route('etenders.destroy', $etender->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('etenders.edit', $etender->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No E-Tenders yet! </h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{ $etenders->links() }}
        </div>
    </div>
</div>
@endsection
