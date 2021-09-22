<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Work-Permit</title>
<style>
body {
   background:url('/frontend/img/photo_2.jpg') no-repeat !important;
	 max-width: 2480px;
   width:100%;
	 margin:auto;
	 height:800px;
   font-family: droidsansfallback, sans-serif;
	
}

#form{
  margin-top: 260px;
    margin-left: 270px;
}

#form2{
  margin-top: 23px;
    margin-left: 222px;
}

#web_name{
  margin-top: 150px;
  margin-left: 40px;
}

</style>
</head>
<body>
<div id="form">
	<table cellspacing="12" style=' font-size:20px'>
	  <tr>
		<td>{{$work_detail->visa_no}}</td>
	  </tr>
	  <tr>
		<td>{{$work_detail->visa_issue_date}}</td>
	  </tr>
	  <tr>
		<td>{{$work_detail->visa_expiry_date}}</td>
	  </tr>
	  <tr>
		<td style="text-transform: uppercase;">{{$work_detail->duration}}</td>
	  </tr>
	</table>
</div>

<div id="form2">
<table cellspacing="12" style=' font-size:18px'>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->expatriaes_name}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->occupation}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->country->nationality}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;"> @if ($work_detail->gender == 0)Male
                                            @else
                                               Female
                                            @endif</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->dob}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->passport_no}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->passport_issue_date}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->passport_expiry_date}}</td>
  </tr>
  <tr>
    <td style="text-transform: uppercase;">{{$work_detail->placeofissue}}</td>
  </tr>
  
</table>
</div>

<div id="web_name">

<P style=' margin:0px 0px 0px 100px;font-size:22px;;padding:0;'>{{$work_detail->website_name}}</p>
</div>


</body>
</html>