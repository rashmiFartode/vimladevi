

<form method="POST" action="{{  isset($teachingStaff) ? route('teachingStaffs.update', $teachingStaff->id) : route('teachingStaffs.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($teachingStaff))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="name">Name<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="name" id="name" value="{{ isset($teachingStaff) ? $teachingStaff->name : old('name') }}" class="form-control input-default @error('name') is-invalid @enderror"  autocomplete="name" autofocus required/>
                            @error('name')  <small class="text-danger">{{ $errors->first('name') }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation<sup class="text-danger h6">*</sup></label>
                            <select name="designation" id="designation" required class="form-control input-default @error('designation') is-invalid @enderror"  autofocus required  >

                            <option value="{{ isset($teachingStaff) ? $teachingStaff->designation : old('designation') }}">
                            @if(isset($teachingStaff))
                            {{ isset($teachingStaff) ? $teachingStaff->designation : old('designation') }}

                            @else   ---Select Department---
                            @endif

                            </option>
                            <option value="reader">Reader</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="professor">Professor</option>
                            {{-- <option value="Designation4">Designation4</option> --}}
                            </select>

                            @error('designation')  <small class="text-danger">{{ $errors->first('designation') }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="department">Department<sup class="text-danger h6">*</sup></label>

                            <select name="department" id="department"required class="form-control input-default @error('department') is-invalid @enderror"  autofocus required >{{ isset($teachingStaff) ? $teachingStaff->Department : old('department') }}
                            <option value="{{ isset($teachingStaff) ? $teachingStaff->department : old('department') }}">
                            @if(isset($teachingStaff))
                            {{ isset($teachingStaff) ? $teachingStaff->department : old('department') }}

                            @else   ---Select Department---
                            @endif</option>
                            <option value="ayurved">Ayurved Samhita & Siddhant</option>
                            <option value="rachana">Rachana Sharir</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="kriya">Kriya Sharir</option>
                            <option value="swasthavritta">Swasthavritta & Yoga</option>
                            <option value="rasaShashtra">Rasa Shashtra & Bhaisajya Kalpana</option>
                            <option value="dravyaguna">Dravyaguna</option>
                            <option value="rogNidan">Rog Nidan & Vikriti Vigyan</option>
                            <option value="agadTantra">Agad Tantra & Vidhi Vaidyaka</option>
                            <option value="prasuti&StriRoga">Prasuti & Stri Roga</option>
                            <option value="shalyatantra">Shalyatantra +(Ksharsutra Lab.)</option>
                            <option value="shalakyaTantra">Shalakya Tantra</option>
                            <option value="kayachikitsa">Kayachikitsa</option>
                            <option value="panchkarma">Panchkarma</option>
                            <option value="kaumarbhrityaBalaRog">Kaumarbhritya - Bala Rog</option>
                            </select>
                            @error('department')  <small class="text-danger">{{ $errors->first('department') }}</small> @enderror
                        </div>


                        <div class="form-group">
                            <label for="file">Image<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" " name="file" id="file" value="{{ isset($teachingStaff) ? $teachingStaff->file : old('file') }}">
                            @error('file')  <small class="text-danger">{{ $errors->first('file') }}</small> @enderror

                        </div>
                        @if(isset($teachingStaff))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $teachingStaff->file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="{{ route('teachingStaffs.index') }}" class="btn btn-info ">Back</a>
                        </div>
                    </form>
