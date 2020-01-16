@extends('auth.authLayouts.adminlayout')
@section('title','Gallery')
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
                            <h1>Gallery</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('gallery.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($galleries->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Title</td>
                            <td>File</td>
                            <td></td>
                        </tr>
                         @foreach ($galleries as $key => $gallery)
                        <tr>
                        <td>{{ ($galleries->currentpage()-1) * $galleries->perpage() + $key + 1 }}</td>
                        <td>
                            @if ($gallery->category  == "1")
                                {{   'Medical Camp & Workshop,Seminar' }}
                            @elseif ($gallery->category  == "2")
                                {{ 'Swachha Bharat' }}
                            @elseif ($gallery->category  == "3")
                                {{ 'Rashtriy Madhumeh' }}
                            @elseif ($gallery->category  == "4")
                                {{ 'Cultural' }}
                            @elseif ( $gallery->category  == "5")
                                {{  'Sports'  }}
                            @endif
                        </td>
                        <td><img src="{{asset('storage/' . $gallery->file) }}" width="100px" height="100px"/> </td>
                            <td>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('gallery.edit', $gallery->id) }}"
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
            {{ $galleries->links() }}
        </div>
    </div>
</div>
@endsection
