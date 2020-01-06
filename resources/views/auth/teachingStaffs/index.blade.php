@extends('auth.authLayouts.adminlayout')
@section('title','Teaching Staff')
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
                            <h1>Teaching Staff </h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('teachingStaffs.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($teachingStaffs->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Name</td>
                            <td>Designation</td>
                            <td>Department</td>
                            <td>Image</td>
                        </tr>
                         @foreach ($teachingStaffs as $key => $n)
                        <tr>
                        <td>{{ ($teachingStaffs->currentpage()-1) * $teachingStaffs->perpage() + $key + 1 }}</td>
                        <td>{{ $n->name }}</td>
                        <td>{{ $n->designation }}</td>
                        <td>{{ $n->department }}</td>

                            <td><a href="{{asset('storage/' . $n->file) }}" class="btn btn-info btn-sm" target="_blank"> View</a></td>
                            <td>
                                <form action="{{ route('teachingStaffs.destroy', $n->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('teachingStaffs.edit', $n->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No Records of Teaching Staff yet! </h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-12">
            {{ $teachingStaffs->links() }}
        </div>
    </div>
</div>
@endsection
