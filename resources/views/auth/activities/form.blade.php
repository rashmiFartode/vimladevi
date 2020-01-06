<form method="POST" action="{{  isset($activity) ? route('activities.update', $activity->id) : route('activities.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($activity))
                           @method('PUT')
                        @endif 

                        <div class="form-group">
                            <label for="title">Title<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="title" id="title" value="{{ isset($activity) ? $activity->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus required/>
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description<sup class="text-danger h6">*</sup></label>
                            <textarea name="description" id="description" required class="form-control input-default @error('description') is-invalid @enderror"  autofocus required >{{ isset($activity) ? $activity->description : old('description') }}</textarea>
                            @error('description')  <small class="text-danger">{{ $errors->first('description') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" " name="file" id="file" value="{{ isset($activity) ? $activity->file : old('file') }}">
                            @error('file')  <small class="text-danger">{{ $errors->first('file') }}</small> @enderror

                        </div>
                        @if(isset($activity))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $activity->file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('activities.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
