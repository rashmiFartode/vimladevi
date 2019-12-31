<form method="POST" action="{{  isset($notification) ? route('notifications.update', $notification->id) : route('notifications.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($notification))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="title">Title<sup class="text-danger h6">*</sup></label>
        <input type="text" name="title" id="title" value="{{ isset($notification) ? $notification->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus required/>
        @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror

    </div>

    <div class="form-group">
        <label for="notification_file">File<sup class="text-danger h6">*</sup></label>
        <input type="file" class="form-control-file @error('notification_file') is-invalid @enderror" name="notification_file" id="notification_file" value="{{ isset($notification) ? $notification->notification_file : old('notification_file') }}" >
        @error('notification_file')  <small class="text-danger">{{ $errors->first('notification_file') }}</small> @enderror

    </div>
    @if(isset($notification))
    <div class="form-group">
        <a href="{{asset('storage/' . $notification->notification_file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
    </div>
    @endif
    <div class="form-group">
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="new" value="1"
                @if(isset($notification))
                @if(($notification->new)==1) checked @endif
                @endif
                >

                Blink as new</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success mr-3">Submit</button>
        <a href="{{ route('notifications.index') }}" class="btn btn-info">Back</a>
    </div>
</form>
