                   <form method="POST" action="{{  isset($attendance) ? route('attendances.update', $attendance->id) : route('attendances.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($attendance))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="title" id="title" value="{{ isset($attendance) ? $attendance->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus required/>
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="attendanceFor">Attendance For<sup class="text-danger h6">*</sup></label>
                            <select name="attendanceFor" id="attendanceFor" class="form-control" @error('attendanceFor') is-invalid @enderror" required>
                                <option value="ipd&opd"
                                    @if (isset($attandance))
                                        {{ $attendance->attendanceFor  == "ipd&opd" ? 'selected' : '' }}
                                    @endif
                                    >IPD and OPD</option>
                                <option value="teacherStaff"
                                    @if (isset($attandance))
                                    {{ $attendance->attendanceFor  == "teacherStaff" ? 'selected' : '' }}
                                    @endif
                                >Teacher Staff Attendance</option>
                                <option value="teacherStaff"
                                    @if (isset($attandance))
                                    {{ $attendance->attendanceFor  == "teacherStaff" ? 'selected' : '' }}
                                    @endif
                                >Non Teacher Staff Attendance</option>
                                <option value="teacherStaff"
                                    @if (isset($attandance))
                                    {{ $attendance->attendanceFor  == "teacherStaff" ? 'selected' : '' }}
                                    @endif
                                >Hospital Staff Attendance</option>
                                <option value="student"
                                    @if (isset($attandance))
                                    {{ $attendance->attendanceFor  == "student" ? 'selected' : '' }}
                                    @endif
                                >Student Attendance</option>
                            </select>
                            @error('attendanceFor')  <small class="text-danger">{{ $errors->first('attendanceFor') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" " name="file" id="file" value="{{ isset($attendance) ? $attendance->file : old('file') }}">
                            @error('file')  <small class="text-danger">{{ $errors->first('file') }}</small> @enderror

                        </div>
                        @if(isset($attendance))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $attendance->file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                        </div>
                    </form>
