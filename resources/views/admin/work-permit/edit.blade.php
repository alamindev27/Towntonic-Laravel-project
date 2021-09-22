@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')

    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">{{ $subTitle }}</h3>
            <form action="{{ route('admin.work-permit.update',$workpermit->id) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                 <input type="hidden" name="id" value="{{ $workpermit->id }}">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Expatriaes Details</h5>
                        <hr>
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" for="expatriaes_name">Expatriaes Name </label>
                                <input class="form-control @error('expatriaes_name') is-invalid @enderror" type="text" name="expatriaes_name" id="expatriaes_name" value="{{ $workpermit->expatriaes_name }}" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="china_name">China Name </label>
                                <input class="form-control @error('china_name') is-invalid @enderror" type="text" name="china_name" id="china_name" value="{{ $workpermit->china_name }}" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="occupation">Occupation </label>
                                <input class="form-control @error('occupation') is-invalid @enderror" type="text" name="occupation" id="occupation" value="{{ $workpermit->occupation }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality </label>
                                <select id=nationality class="form-control custom-select mt-15" name="country_id" required>
                                    <option value="0" disabled selected>Select nationality</option>
                                    @foreach($nationalities as $nationality)
                                    @if (isset($workpermit->country_id) && $workpermit->country_id == $nationality->id)
                                        <option value="{{ $nationality->id }}" selected> {{ $nationality->nationality }} </option>
                                    @else
                                        <option value="{{ $nationality->id }}"> {{ $nationality->nationality }} </option>
                                    @endif
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender </label>
                                <select id=gender class="form-control custom-select mt-15" name="gender" required>
                                    <option value="-" disabled selected>---</option>
                                    <option value="0" {{isset($workpermit->gender) ? (($workpermit->gender == "0") ? 'selected' : '') : '' }}>Male</option>
                                    <option value="1" {{isset($workpermit->gender) ? (($workpermit->gender == "1") ? 'selected' : '') : '' }}>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dob">Date Of Birth</label>
                                <input class="form-control @error('dob') is-invalid @enderror dateformat" type="text" name="dob" id="dob" value="{{ $workpermit->dob }}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="placeofissue">Place Of Issue</label>
                                <input class="form-control @error('placeofissue') is-invalid @enderror" type="text" name="placeofissue" id="placeofissue" value="{{ $workpermit->placeofissue }}" required/>
                            </div>
                        </div>
                        <h5>Company Details</h5>
                        <hr>
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" for="website_name">Website Name</label>
                                <input class="form-control @error('website_name') is-invalid @enderror" type="text" name="website_name" id="website_name" value="{{ $workpermit->website_name }}" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="company_name">Company Name</label>
                                <input class="form-control @error('company_name') is-invalid @enderror" type="text" name="company_name" id="company_name" value="{{ $workpermit->company_name }}" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="company_name_chinese">Company name in Chinese</label>
                                <input class="form-control @error('company_name_chinese') is-invalid @enderror" type="text" name="company_name_chinese" id="company_name_chinese" value="{{ $workpermit->company_name_chinese }}" required/>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <h5>Work Visa Details</h5>
                        <hr>
                        <div class="tile-body">
                            <div class="form-group">
                                <label class="control-label" for="visa_no">Work Visa No </label>
                                <input class="form-control @error('visa_no') is-invalid @enderror" type="number" name="visa_no" id="visa_no" value="{{ $workpermit->visa_no }}" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="visa_issue_date">Visa Issue Date</label>
                                <input class="form-control @error('visa_issue_date') is-invalid @enderror dateformat" type="text" name="visa_issue_date" id="visa_issue_date" value="{{ $workpermit->visa_issue_date }}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="visa_expiry_date">Visa Expiry Date</label>
                                <input class="form-control @error('visa_expiry_date') is-invalid @enderror dateformat" type="text" name="visa_expiry_date" id="visa_expiry_date" value="{{ $workpermit->visa_expiry_date }}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="passport_no">Passport No </label>
                                <input class="form-control @error('passport_no') is-invalid @enderror" type="text" name="passport_no" id="passport_no" value="{{ $workpermit->passport_no }}" required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="passport_issue_date">Passport Issue Date</label>
                                <input class="form-control @error('passport_issue_date') is-invalid @enderror dateformat" type="text" name="passport_issue_date" id="passport_issue_date" value="{{ $workpermit->passport_issue_date }}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="passport_expiry_date">Passport Expiry Date</label>
                                <input class="form-control @error('passport_expiry_date') is-invalid @enderror dateformat" type="text" name="passport_expiry_date" id="passport_expiry_date" value="{{ $workpermit->passport_expiry_date }}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="duration">Duration </label>
                                <input class="form-control @error('duration') is-invalid @enderror" type="text" name="duration" id="duration" value="{{ $workpermit->duration }}" required/>
                            </div>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Change</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.work-permit.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection