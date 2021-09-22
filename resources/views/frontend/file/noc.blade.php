<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>NOC</title>
<style>
body {
  	background-image:url("/frontend/img/photo1.jpg"); 
	  background-repeat:no-repeat;
	  max-width: 2480px;
    width:100%;
	  margin:auto;
	  height:720px;
	
}

@font-face {
   font-family: SimHei;
   src: url('/frontend/admin/assets/fonts/simhei.ttf') format('truetype');
}

#form{
	margin-top: 343px;
    margin-left: 148px;
}

#web_name{
	margin-top: 240px;
    margin-left: 11px;
}


</style>
</head>
<body >
<div id="form">
<table cellspacing="33" style=' font-size:20px'>
  <tr>
    <td colspan="2">{{$work_details->expatriaes_name}}</td>
	<td></td>
    <td text-align="right" style="font-family: SimHei;">{{$work_details->china_name}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_details->country->nationality}}</td>
	<td></td>
	<td></td>
    <td text-align="right" style="text-transform: uppercase;">{{$work_details->country->nationality}}</td>
  </tr>
  <tr>
    <td>{{$work_details->dob}}</td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td>{{$work_details->passport_no}}</td>
	<td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>{{$work_details->passport_issue_date}}</td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
</table>
</div>

<div id="web_name">
<P style=' font-size:30px; margin:0;padding:0;text-transform: capitalize;;'> {{$work_details->company_name}}</p>
<P style='margin:40px 0px 0px 90px;font-size:22px;;padding:0;'>{{$work_details->website_name}}</p>
</div>

</div>


</body>
</html>