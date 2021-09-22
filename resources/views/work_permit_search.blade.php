<!DOCTYPE html>
<html>
<head>
<title>Work-Permit</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/aRzTemplate/aRzDef/aRzJs/html2canvas.js') }}"></script>
<style>
	body {
	 height: 100vh;
	   display: flex;
	   justify-content: center;
	   align-items: center;
		margin: 0px;
		 padding:0px;
		 height:297mm;
	   width:210mm;
   
   } 
   html{
	   height:297mm;
	   width:210mm;
   }
	#container {
	  position:relative;
	  left:0; 
	  top:0;
	  width: 210mm;
	  min-height: 297mm;
	}
   
   #wrapper {
	 display: inline-block;
	   overflow: hidden;
	   position: relative;
   }
   #img {
	   pointer-events: none;
	   position: absolute;
	   height:297mm;
	   width:210mm;
	   z-index: -1;
   }

   
   #form{ 
	   margin:290px 70px 0px 70px;
   }
   #form2{
	   margin:10px 70px 0px 70px;
   }
   
   #web_name{
	   margin:0px 0px 0px 0px;
   }
   @media print {
   * {
	   -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
	   color-adjust: exact !important;  /*Firefox*/
	 }
   }
   
   
   </style>
</head>
<body>
 <div id="container">
<div id="wrapper">
  <img id="img" src="{{asset('frontend/img/work_permit.jpg')}}" >

  <div id="form">
  <table cellspacing="8" style="font-size:16px" width="100%">
	<tr>
		<th colspan="3" align="left">WORK VISA DETAILS</th>
		<th></th>
		<th colspan="3" align="right" style="font-weight:bold;">工作签证详情</th>
	</tr>
	<tr>
		<td>Work Visa No.</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td></td>
		<td>{{$work_details->visa_no}}</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td align="right" style="font-weight:bold;">工作编号.</td>
	  </tr>
	  <tr>
		<td align="right">Issue Date</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td>{{$work_details->visa_issue_date}}</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td align="right" style="font-weight:bold;">发行日期</td>
	  </tr>
	  <tr>
		<td align="right">Expiry Date</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td>{{$work_details->visa_expiry_date}}</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td align="right" style="font-weight:bold;" >到期日</td>
	  </tr>
	  <tr>
		<td align="right">Duration</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td style="text-transform: uppercase;">{{$work_details->duration}}</td>
		<td>&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;</td>
		<td align="right" style="font-weight:bold;">持续时间</td>
	  </tr>
	  
  
</table>
</div>
  <div id="form2">
  <table cellspacing="7" style="font-size:16px" width="100%" >
	<tr>
		<th colspan="3" align="left">EXPATRIAES DETAILS</th>
		<th colspan="2" align="right" style="font-weight:bold;">外籍人士详情</th>
	</tr>
	<tr>
		<td colspan="2" style="white-space: nowrap;">Expatriaes Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    	<td colspan="2" style="text-transform: uppercase; white-space: nowrap;padding-left: 25px;">{{$work_details->expatriaes_name}}</td>
		<td align="right" style="font-weight:bold;">外派人名称</td>
	  </tr>
	  <tr>
		<td>Occupation</td>
		<td></td>
		<td colspan="2" style="text-transform: uppercase;padding-left: 25px;white-space: nowrap;">{{$work_details->occupation}}</td>
		
		<td align="right" style="font-weight:bold;">占用</td>
	  </tr>
	  <tr>
		<td>Nationality</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->country->nationality}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">国籍</td>
	  </tr>
	  <tr>
		<td>Gender</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;"> @if ($work_details->gender == 0)Male
      @else
         Female
      @endif</td>
		<td></td>
		<td align="right" style="font-weight:bold;">性别</td>
	  </tr>
	  <tr>
		<td style="white-space: nowrap;">Date Of Birth</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->dob}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">出生日期</td>
	  </tr>
	  <tr>
		<td style="white-space: nowrap;">Passport No.</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->passport_no}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">护照号</td>
	  </tr>
	  <tr>
		<td style="white-space: nowrap;padding-left: 20px;" >Issue Date.</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->passport_issue_date}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">发行日期</td>
	  </tr>
	  <tr>
		<td style="white-space: nowrap;padding-left: 20px;" >Expiry Date.</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->passport_expiry_date}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">到期日</td>
	  </tr>
	  <tr>
		<td style="white-space: nowrap;padding-left: 20px;" >Place Of Issue</td>
		<td></td>
		<td style="text-transform: uppercase;padding-left: 25px;">{{$work_details->placeofissue}}</td>
		<td></td>
		<td align="right" style="font-weight:bold;">签发地点</td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td ></td>
		<td colspan="2" align="right"><img src="{{asset('frontend/img/seal.png')}}" height="185px" width="210px"></td>
	  </tr>
  
</table>
</div>

<div id="web_name">
<table  cellspacing="6" style="margin:0px 0px 60px 90px;padding:0;"width="100%">
  <tr>
    <th align="left" style="font-size:20px; ">要驗證此工作許可證的有效性請訪問我們的網站</th>
  </tr>
  <tr>
    <td style="font-size:11px; ">To verify the validity of this work permit please visit our website.</td>
  </tr>
  <tr>
    <td style="padding-left: 10px;"> >> {{ config('settings.website_name') }} << </td>
  </tr>
</table>
</div>
</div>

<div style="width: 50%;margin: 0px auto;padding: 0px;background: white;min-height: 29px;">
  
      <a style="padding: 5px 14px;display: block;float: left;background: aquamarine;text-decoration: none;color: black;" href="javascript:void(0)"   id="btn-Convert-Html2Image" >Download</a>
      <a style="padding: 5px 14px;display: block;float: left;background: aquamarine;text-decoration: none;color: black;" href="javascript:void(0)" id="printimage" onclick="printImage()">Print</a>

      
      
</div>
  </div>
  <input type="hidden" id="visa" name="visa" value="{{$work_details->visa_no}}">

<script>
  function printImage() {
    window.print();
    
  }
  var visa = $("#visa"). val();
  console.log(visa);
  $("#btn-Convert-Html2Image").click(function() {
    html2canvas($("#wrapper"), {
      onrendered: function(canvas) {
        saveAs(canvas.toDataURL(), ''+visa+'.png');
      }
    });
  });

  
  function saveAs(uri, filename) {
    var link = document.createElement('a');
    if (typeof link.download === 'string') {
      link.href = uri;
      link.download = filename;

      document.body.appendChild(link);

      link.click();

      document.body.removeChild(link);
    } else {
      window.open(uri);
    }
  }
  </script>


</body>
</html>