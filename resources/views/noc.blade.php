@extends('frontend.app')

@section('content')

<div id="pagetop">
  <div class="container">
    <h1> NOC </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; NOC </div>
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
<div class="et-box et-shadow" style="width: 852px;">
  <div class="et-box-content" style="width: 800px;">
    <form action="{{route('home.noc.search') }}" method="POST" style="width: 50%;margin: 0px auto">
      @csrf
    <!--<input type="hidden" name="layout" value="search" />-->
      <strong><span style="color: #ff0000;">*</span> Name: </strong>
      <input style="display: block;
padding: 8px;
width: 100%;
border: 1px solid #ddd;" id="keyword width=" name="name" required="required" value=""  maxlength="55" type="text" />
      <strong style="display: block;"><span style="color: #ff0000;">*</span> Passport No:</strong>
      <input style="display: block;
padding: 8px;
width: 100%;
border: 1px solid #ddd;" id="keyword width=" name="passport" required="required" value="" maxlength="55" type="text" />

        <div class="captch-code">
            {{-- <img src="{{ asset('frontend/captcha.php')}}">  --}}
            <span>{!! captcha_img('math') !!}</span>
            <a style="text-decoration: none;cursor: pointer;background: #cdd2d2;padding: 16px;float: right;margin-right: 96px;" onclick="window.location.reload()"id="refresh"> Refresh Captcha</a>
        </div>
      <strong style="display: block;"><span style="color: #ff0000;">*</span>Verification Code :</strong>
      <input style="display: block;
padding: 8px;
width: 100%;
border: 1px solid #ddd;" id="captcha" name="captcha"  value="" maxlength="55" type="text" />
      <input style="padding: 6px;width: 120px;border: 1px solid #ccc;text-align: center;font-weight: bold;cursor: pointer;" name="noc" value="Search" type="submit" />
    </form>
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
<!-- end #content -->

@endsection

@push('scripts')
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