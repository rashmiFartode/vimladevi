<form method="POST" action="{{  isset($news) ? route('news.update', $news->id) : route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($news))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="title" id="title" value="{{ isset($news) ? $news->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus required/>
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description<sup class="text-danger h6">*</sup></label>
                            <textarea cols="" rows="7" name="description" id="description" class="form-control input-default @error('description') is-invalid @enderror"  autocomplete="description" autofocus required>{{ isset($news) ? $news->description : old('description') }}</textarea>
                            @error('description')  <small class="text-danger">{{ $errors->first('description') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="news_file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('news_file') is-invalid @enderror" " name="news_file" id="news_file" value="{{ isset($news) ? $news->news_file : old('news_file') }}">
                            @error('news_file')  <small class="text-danger">{{ $errors->first('news_file') }}</small> @enderror

                        </div>
                        @if(isset($news))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $news->news_file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('news.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
