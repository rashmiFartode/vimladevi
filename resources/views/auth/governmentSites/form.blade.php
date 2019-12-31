
                    <form method="POST" action="{{ isset($governmentSite) ? route('governmentSites.update', $governmentSite->id) : route('governmentSites.store') }}">
                        @csrf
                        @if(isset($governmentSite))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="name">Name<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="name" id="name" value="{{ isset($governmentSite) ? $governmentSite->name : old('name') }}" class="form-control @error('name') is-invalid @enderror"  autocomplete="name" autofocus />
                            @error('name')  <small class="text-danger">{{ $errors->first('name') }}</small> @enderror

                        </div>

                        <div class="form-group">
                            <label for="link">Link<sup class="text-danger h6">*</sup></label>
                            <input type="url" name="link" id="link" value="{{ isset($governmentSite) ? $governmentSite->link : old('link') }}" class="form-control @error('link') is-invalid @enderror"  autocomplete="link" >
                            @error('link')  <small class="text-danger">{{ $errors->first('link') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('governmentSites.index') }}" class="btn btn-info">Back</a>
                        </div>
                    </form>
