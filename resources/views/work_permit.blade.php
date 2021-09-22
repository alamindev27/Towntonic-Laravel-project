@extends('frontend.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/admin/assets/plugins/bootstrap-datepicker/css/datepicker.css')}}">
    
    
@endsection

@section('content')

<div id="pagetop">
  <div class="container">
    <h1> Work Permit </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; Work Permit </div>
  <!-- end .container -->
</div>
<!-- end #breadcrumbs -->
<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">
      <div class="msg-suc" style="padding: 10px">
              </div>
<p>&nbsp;</p>
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li style="color:red;font-weight:bold;">{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
<div class="et-box et-bio" style="width: 930px;">
  <div class="et-box-content">Complete the below section with your valid information</div>
</div>
<div class="et-box et-shadow" style="width: 930px;">
  <div class="et-box-content">
    <form action="{{route('home.work-permit.search') }}" method="POST" style="width: 50%;margin: 0px auto">
      @csrf
      <strong style="display: block;">
        <span style="color: #ff0000;">* </span>Work Visa No.: 
      </strong>
      <input id="keyword" class="form-control" name="visa_no" required=""  min="0" maxlength="35" type="number" />
      <strong style="display: block;">
        <span style="color: #ff0000;"> *</span> Name: 
      </strong>
      <input id="keyword" class="form-control" name="name" required=""  maxlength="35" type="text" />

      <strong style="display: block;"><span style="color: #ff0000;"> *</span> Date of Birth: </strong>
      
      <input id="keyword-date" class="form-control" name="dob" required="" maxlength="35" type="text" />
      <strong style="display: block;">Nationality: </strong>
        <select id="nationality" class="form-control custom-select mt-15" name="country_id" required>
            <option value="0" disabled selected>----------</option>
            @foreach($nationalities as $nationality)
              
               <option value="{{ $nationality->id }}"> {{ $nationality->nationality }} </option>
                
            @endforeach
        </select>
        <div class="captch-code">
          {{-- <img src="{{ asset('frontend/captcha.php')}}">  --}}
          <span>{!! captcha_img('math') !!}</span>
          <a style="text-decoration: none;cursor: pointer;background: #cdd2d2;padding: 16px;float: right;margin-right: 96px;" onclick="window.location.reload()"id="refresh"> Refresh Captcha</a>
      </div>
      <strong style="display: block;"><span style="color: #ff0000;">*</span>Verification Code :</strong>
      <input style="display: block;
padding: 8px;
width: 100%;
border: 1px solid #ddd;" id="captcha" name="captcha" value="" maxlength="55" type="text" />
      <input style="padding: 6px;width: 120px;border: 1px solid #ccc;text-align: center;font-weight: bold;cursor: pointer;margin-top: 20px;" name="work" value="Search" type="submit" />
      <input style="padding: 6px;width: 120px;border: 1px solid #ccc;text-align: center;font-weight: bold;cursor: pointer;margin-top: 20px;"  type="reset" />
    </form>
  </div>
  <div class="remember-text" style="padding: 10px;
text-align: center;
margin-top: 20px;
font-size: 17px;
color: #777;
font-family: unset;">
      <p>If you encounter any problems with this e-service, Please contact us at E-mail:<a href="{{ config('settings.default_email_address') }}">{{ config('settings.default_email_address') }}</a></p>
  </div>
</div>
<div class="clear"></div>
      </div>
      <!-- end .entry -->
    </div>

    <!-- end #content-area -->
  </div>
  <!-- end .container -->
</div>

@endsection
@push('scripts')
<script src="{{ asset('frontend/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
  
  jQuery('document').ready(function(){
    jQuery('#keyword-date').datepicker({
    	format : "d-M-yyyy",
        todayHighlight : true
    });
 })
</script>

<script type="text/javascript">
  $('#refresh').click(function(){
    $.ajax({
      type:'GET',
      url:'refreshcaptcha',
      success:function(data){
          $(".captcha span").html(data.captcha);
      }
    });
  });
</script>
@endpush