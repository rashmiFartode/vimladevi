<form method="POST" action="{{  isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($gallery))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Category<sup class="text-danger h6">*</sup></label>
                            <select name="category" id="category" class="form-control" @error('category') is-invalid @enderror" required>
                            <option value="1" class="form-control"
                                @if (isset($gallery))
                                    {{ $gallery->category  == "1" ? 'selected' : '' }}
                                @endif
                                >Medical Camp & Workashop,Seminar</option>
                            <option value="2"
                                @if (isset($gallery))
                                {{ $gallery->category  == "2" ? 'selected' : '' }}
                                @endif
                            >Swachha Bharat</option>
                            <option value="3"
                                @if (isset($gallery))
                                {{ $gallery->category  == "3" ? 'selected' : '' }}
                                @endif
                            >Rashtriy Madhumeh</option>
                            <option value="4"
                                @if (isset($gallery))
                                {{ $gallery->category  == "4" ? 'selected' : '' }}
                                @endif
                            >Cultural</option>
                            <option value="5"
                                @if (isset($gallery))
                                {{ $gallery->category  == "5" ? 'selected' : '' }}
                                @endif
                            >Sports</option>
                        </select>
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror

                        </div>

                        <div class="form-group">
                            <label for="file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" " name="file" id="file" value="{{ isset($gallery) ? $gallery->file : old('file') }}">
                            @error('file')  <small class="text-danger">{{ $errors->first('file') }}</small> @enderror

                        </div>
                        @if(isset($gallery))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $gallery->file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
