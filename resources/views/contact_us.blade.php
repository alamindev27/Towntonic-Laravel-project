@extends('frontend.app')


@section('styles')
<style>
.alert {
  padding: 20px;
  background-color: #4CAF50;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
    
    
@endsection

@section('content')


<div id="pagetop">
  <div class="container">
    <h1> Contact Us </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; Contact Us </div>
  <!-- end .container -->
</div>
<!-- end #breadcrumbs -->
<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">
      <div class="msg-suc" style="padding: 10px">
              </div>
      <img src="{{ asset('frontend/con_banner.png')}}" style="width: 100%;height: 200px;">
<h3>Dear visitor:</h3><br>
<p>Matters pertaining to mainland China, Hong Kong, and Macau in such areas as cross-strait policies, laws and regulations, economic, cultural, and educational exchanges, as well as the coordination of related civic issues and interagency affairs, are the remit of the Mainland Affairs Council.</p>

<p>Matters pertaining to immigration and border controls, new immigrants, foreign spouses (excluding interviews for resident visas for dependents), and applications for Alien Resident Certificates (excluding visa applications for travel to Taiwan) are the remit of the National Immigration Agency.</p>   
    
<p>To avoid delays in the handling of any complaints, suggestions, or petitions you may wish to put forward concerning any of the above, please email them directly to either the Mainland Affairs Council or the National Immigration Agency accordingly.</p>

<p>Welcome to the "Minister's Mailbox." This is one of the many ways for you to contact us directly. You can use this website to share your thoughts and comments with us. As such, whenever you have anything to bring to our attention, simply write us an e-mail and furnish us with your name, telephone and e-mail address via this website. We will handle your issue as quickly as possible.</p>

<p>As we value your opinion, please provide us with your real name, a valid address, and concrete contents, or we will not be able to reply. In addition, if any of the following instances appear in your letter, we are afraid that we won't be able to provide a response:</p>

<p>If others' articles, links, blogs or unverified reports are included in your e-mail.
If you continue to send in requests concerning the same incident despite the fact that it has been managed properly as well as being answered clearly by us.</p>
<p>Letters of the same nature that have already been delivered by you to the ROC (Taiwan)'s Office of the President and the Executive Yuan.</p>

<p>If your requests involve opinions that are emotional, provocative, baseless, include personal attacks, vilifying or defamatory, or indicate personal information-leaking or similar implications.
If your requests do not concern our jurisdiction, we will forward them to other competent authorities.
When we receive an email from you, we will reply with a verification notice. Please confirm receipt of this notice by following the instructions in the notice.
The computer system will then send you a second notice with a serial number and a code for checking on the progress of your case.</p>

<p>Any email which is not confirmed will be kept for 30 days before it is deleted. If you do not receive the initial verification notice, please click the Confirm Mail button in the top right corner of this page.
We will provide a response to your email within seven days of the second notice. If the complexity of the matter requires a longer response time, we will first notify you by email. In this case, please wait patiently for our final response.</p>

<p>Receipt of your email by the Minister's Mailbox implies that you understand and accept our management principles and processes, as well as the privacy and security policies of our system. If you have questions regarding the use of this system, please contact us during our office hours.</p>
 
 
<h4>send your e-mail→receive a ready-to-be-confirmed email from us→complete your confirmation process
→our system sends out a notice of receiving your confirmation to you with a serial number 
and a code number regarding your request, which in the meantime has been assigned to 
the relevant department to prepare an answer→we send out our response to you
→the case is closed and we conduct a satisfaction survey with you.</h4>
<p>----------------------------------------------------------------------</p>

<div id="et-contact">
    @if (Session::get('success'))
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>Success!</strong> {{ Session::get('success') }}
        </div>
    @endif
  <div id="et-contact-message"> </div>
  <form action="{{route('contact.send')}}" method="POST" role="form" enctype="multipart/form-data" class="contact-form">
      @csrf
      <div id="contact_left">
           <div class="form-group">
              <label for="fname">Full Name</label>
              <input type="text" name="fname" class="form-control" required="">
           </div>
            <div class="form-group">
              <label for="fname">Gender</label>
              <select name="gender" class="form-control" required="">
                 <option value="" disabled selected>---</option>
                 <option value="Male"> Male</option>
                 <option value="Female"> Female</option>
              </select>
           </div>
           <div class="form-group">
              <label for="fname">Email </label>
              <input type="email" name="email" class="form-control" required="">
           </div>
           <div class="form-group">
              <label for="fname">Subject </label>
              <input type="text" name="subject" class="form-control">
           </div>
           <div class="form-group">
                <label for="">Content</label>
                <textarea style="height: 150px" name="content" class="form-control"></textarea>
           </div>
           <div class="form-group">
                Reply <input type="checkbox" name="reply"> Don't Reply
           </div>
           <!--<div class="form-group">
                <label for="file"> Attachment :</label>
                <input type="file" name="attachment">
           </div>-->
            <div class="form-group">
              <span>{!! captcha_img('math') !!}</span>
              <a style="text-decoration: none;cursor: pointer;" onclick="window.location.reload()" id="refresh"> Refresh Captcha</a>
           </div>
           <div class="form-group">
                <label for="file"> Verification Code</label>
                <input type="text" name="captcha" style="width: 34%;padding: 4px;border-radius: 3px;">
           </div>
           <div class="button-action" style="margin-top: 10px;">
              <input style="padding: 6px;width: 14%;font-size: 18px;font-weight: bold;border: 1px solid #ccc;background: #f3f6f5;cursor: pointer;" type="submit" name="send" class="send" value="Send">
              <input style="margin-left: 57px;padding: 6px;width: 14%;font-size: 18px;font-weight: bold;border: 1px solid #ccc;background: #f3f6f5;cursor: pointer;" type="reset" name="" value="Reset" class="Reset" >
           </div>
      </div>
  </form>

  <div class="about-content">
      <div class="content">
         <p>Republic of CHINA  (Taiwan)</p>
         <p>MINISTRY OF HOME AFFAIRS IMMIGRATION DEPARTMENT</p>
         <p><a href="#">Privacy</a> |  <a href="#">Secority Policies</a></p>
         <p>Address: 3rd-5th Floor,2-2 chi-nam rd,Sec-1,Taipei City,10051 Noc (Taiwan)</p>
         <p>Tel: (+886) 2 - 2343-28855</p>
      </div>
      <div class="about-img">
          <img src="{{ asset('frontend/img/govtai.gif')}}">
          <img src="{{ asset('frontend/img/QRCode.jpg')}}">
      </div>
  </div>
</div>

<!-- end #et-contact -->
<div class="clear"></div>
<div class="clear"></div>      </div>
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