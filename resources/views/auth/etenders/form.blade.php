<form method="POST" action="{{  isset($etender) ? route('etenders.update', $etender->id) : route('etenders.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($etender))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="title" id="title" value="{{ isset($etender) ? $etender->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus required/>
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror

                        </div>

                        <div class="form-group">
                            <label for="etender_file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('etender_file') is-invalid @enderror" " name="etender_file" id="etender_file" value="{{ isset($etender) ? $etender->etender_file : old('etender_file') }}">
                            @error('etender_file')  <small class="text-danger">{{ $errors->first('etender_file') }}</small> @enderror

                        </div>
                        @if(isset($etender))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $etender->etender_file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('etenders.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
