@extends('auth.authLayouts.adminlayout')

@if(isset($blogs))
@section('title','Edit blog')
@else
@section('title','Create Blogs')
@endif
@section('customcss')
    <style>
    .btn-info
    {
        color: white;
    }
    </style>
    <script src="https://cdn.tiny.cloud/1/yez4i11rw9seke1pxxiqozw22dzxr2od5zc0ibft2jb3bfip/tinymce/5/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#content',
            width: 600,
            height: 300,
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help powerpaste'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify |' +
            ' bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
            menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
        tinymce.activeEditor.uploadImages(function(success) {
            document.forms[0].submit();
            });

  </script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($blog) ?  'Update' :  'Add' }}  Blogs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.blogs.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customscripts')
<script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</script>
@endsection
