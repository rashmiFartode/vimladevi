@extends('auth.authLayouts.adminlayout')
@section('title','Blogs')
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
                            <h1>Blogs</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('blogs.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($blogs->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Description</td>
                        </tr>
                         @foreach ($blogs as $key => $blog)
                        <tr>
                        <td>{{ ($blogs->currentpage()-1) * $blogs->perpage() + $key + 1 }}</td>
                        <td>{!! $blog->content !!}</td>
                            <td>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('blogs.edit', $blog->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No Blogs yet! </h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-12">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection
