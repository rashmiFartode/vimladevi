<form method="POST" action="{{  isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($notification))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Category name<sup class="text-danger h6">*</sup></label>
        <input type="text" name="name" id="name" value="{{ isset($category) ? $category->name : old('name') }}" class="form-control input-default @error('name') is-invalid @enderror"  autocomplete="name" autofocus required/>
        @error('name')  <small class="text-danger">{{ $errors->first('name') }}</small> @enderror

    </div>

    
    <div class="form-group">
        <button type="submit" class="btn btn-success mr-3">Submit</button>
        <a href="{{ route('categories.index') }}" class="btn btn-info">Back</a>
    </div>
</form>
