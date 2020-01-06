@extends('auth.authLayouts.adminlayout')
@section('title','Category')
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
                            <h1>Category</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('categories.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($categories->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Title</td>
                        </tr>
                         @foreach ($categories as $key => $category)
                        <tr>
                        <td>{{ ($categories->currentpage()-1) * $categories->perpage() + $key + 1 }}</td>
                        <td>{{ $category->name }} </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="{{ route('categories.edit', $category->id) }}"
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
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
