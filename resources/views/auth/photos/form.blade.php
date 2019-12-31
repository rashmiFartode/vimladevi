<form method="POST" action="{{  isset($photo) ? route('photos.update', $photo->id) : route('photos.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($photo))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="category_id">Category<sup class="text-danger h6">*</sup></label>
                            <select name="category_id" id="category_id" class="form-control input-default @error('category_id') is-invalid @enderror"  autocomplete="category_id" autofocus required>
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            </select>

                            @error('category_id')  <small class="text-danger">{{ $errors->first('category_id') }}</small> @enderror

                        </div>

                        <div class="form-group">
                            <label for="file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" " name="file" id="file" value="{{ isset($file) ? $etender->file : old('file') }}">
                            @error('file')  <small class="text-danger">{{ $errors->first('file') }}</small> @enderror

                        </div>
                        @if(isset($photo))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $photo->file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('photos.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
