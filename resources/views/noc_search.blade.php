<!DOCTYPE html>
<html>
<head>
<title>NOC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    width: 210mm;
   min-height: 297mm;
}
img {
    pointer-events: none;
    position: absolute;
    height:297mm;
    width:210mm;
    z-index: -1;
}

#form{ 
	margin:384px 90px 0px 90px;
}

#web_name{
	margin:170px 0px 0px 6px;
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
  <img src="{{asset('frontend/img/noc.jpg')}}" >
<div id="form">
<table cellspacing="20" style="font-size:18px;margin-left:auto; margin-right:auto;" width="100%" >
  <tr>
	<td>Name</td>
	<td>:</td>
    <td style="text-transform: uppercase;white-space: nowrap;">{{$work_details->expatriaes_name}}</td>
	
	<td align="right" style="font-weight:bold;white-space: nowrap;">{{$work_details->china_name}} : 名称</td>
    
  </tr>
  <tr>
	<td>Nationality</td>
	<td>:</td>
    <td style="text-transform: uppercase;white-space: nowrap;">{{$work_details->country->nationality}} </td>
	
	<td align="right" style="text-transform: uppercase;white-space: nowrap;">{{$work_details->country->nationality}} <span style="font-weight:bold;">: 国籍</span></td>
    
    
  </tr>
  <tr>
    
	<td style="white-space: nowrap;">Date Of Birth</td>
	<td>:</td>
    <td style="white-space: nowrap;">{{$work_details->dob}}</td>
	
	
	<td align="right"style="font-weight:bold;white-space: nowrap;"> 出生日期</td>
  </tr>
  <tr>
	<td style="white-space: nowrap;">Passport No</td>
	<td>:</td>
    <td style="white-space: nowrap;">{{$work_details->passport_no}}</td>
	
	
	<td align="right"style="font-weight:bold;white-space: nowrap;"> 护照号</td>
  </tr>
  <tr>
	<td style="white-space: nowrap;">Date Of Issue</td>
	<td>:</td>
    <td style="white-space: nowrap;">{{$work_details->passport_issue_date}}</td>
	
	
	<td align="right"style="font-weight:bold;white-space: nowrap;"> 发行日期</td>
  </tr>
</table>
</div>

<div id="web_name">
<table  cellspacing="6" style="margin:37px 0px 160px 90px;font-size:22px;;padding:0;" width="50%" >
  <tr>
    <td colspan="2" align="left" style="font-size:30px; margin:0;padding:0;text-transform: capitalize;font-family:'Tw Cen MT', 'Century Gothic';white-space: nowrap;">{{$work_details->company_name}}</td>
  </tr>
  <tr>
    <td style="font-weight:bold;white-space: nowrap;">{{$work_details->company_name_chinese}}</td>
    

  </tr>
  <tr style="font-family:'Tw Cen MT', 'Century Gothic', Arial;">
	
    <td style="white-space: nowrap;">website: {{$work_details->website_name}}</td>
  </tr>
</table>
</div>
</div>

<div style="width: 50%;margin: 0px auto;padding: 0px;background: white;min-height: 29px;">
  
      <a style="padding: 5px 14px;display: block;float: left;background: aquamarine;text-decoration: none;color: black;" href="javascript:void(0)"   id="btn-Convert-Html2Image" >Download</a>
      <a style="padding: 5px 14px;display: block;float: left;background: aquamarine;text-decoration: none;color: black;" href="javascript:void(0)" id="printimage" onclick="printImage()">Print</a>

      
      
</div>
  </div>
  <input type="hidden" id="pass" name="pass" value="{{$work_details->passport_no}}">



<script>
	function printImage() {
		window.print();
		
	}
  
  var pass = $("#pass"). val();
  console.log(pass);
  $("#btn-Convert-Html2Image").click(function() {
    html2canvas($("#wrapper"), {
      onrendered: function(canvas) {
        saveAs(canvas.toDataURL(), ''+pass+'.png');
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