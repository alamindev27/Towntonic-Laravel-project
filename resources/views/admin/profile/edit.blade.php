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
        
            <form action="{{ route('admin.password.update') }}" method="POST" role="form">
		        @csrf
		        <h3 class="tile-title">Change Password</h3>
		        <hr>
		        <div class="tile-body">
		            <div class="form-group">
		                <label class="control-label" for="old_password">Old Password :</label>
		                <input
		                    class="form-control"
		                    type="password"
		                    placeholder="Enter your old password"
		                    id="old_password"
		                    name="old_password"
		                />
		            </div>

		            <div class="form-group">
		                <label class="control-label" for="password">New Password</label>
		                <input
		                    class="form-control"
		                    type="password"
		                    placeholder="Enter your new password"
		                    id="password"
		                    name="password"
		                />
		            </div>
		            <div class="form-group">
		                <label class="control-label" for="confirm_password">Confirm New Password</label>
		                <input
		                    class="form-control"
		                    type="password"
		                    placeholder="Enter your confirm password"
		                    id="confirm_password"
		                    name="password_confirmation"
		                />
		            </div>
		        </div>
		        <div class="tile-footer">
		            <div class="row d-print-none mt-2">
		                <div class="col-12 text-right">
		                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Change Password</button>
		                </div>
		            </div>
		        </div>
		    </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">

    CKEDITOR.replace('education', {
      height: 400,
      baseFloatZIndex: 10005
    });

</script>

@endpush