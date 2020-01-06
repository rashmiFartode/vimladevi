@extends('auth.authLayouts.adminlayout')
@section('title','Gallery mutiple upload')
@section('customcss')
<style>
    .btn-info,.btn-success {
        color: white;
    }
    .img-thumbail
    {
        width: 150px;
        height: 100px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card d-block">
                <div class="card-header">
                    <h1>Gallery</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-8">
                                @csrf
                                <label for="files"></label>
                                <input type="file" name="files" id="files" accept="image/*" required/>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="upload" class="btn btn-success" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card d-block">
                <div class="card-header">
                    <h1></h1>
                </div>
                <div class="card-body">
                    @if($files->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>File</td>
                            <td></td>
                        </tr>
                         @foreach ($files as $key => $file)
                        <tr>
                        <td>{{ ($files->currentpage()-1) * $files->perpage() + $key + 1 }}</td>

                            <td><img src="{{ asset('storage/' . $file->files) }}" class="img-thumbail" ></td>
                            <td>
                                <form action="{{ route('galleryimage.destroy', $file->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
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
            {{-- {{ $files->links() }} --}}
        </div>
    </div>
</div>
@endsection
@section('customscripts')

@endsection
