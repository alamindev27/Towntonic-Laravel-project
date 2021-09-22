@extends('frontend.app')

@section('content')

<div id="pagetop">
  <div class="container">
    <h1> Download Forms </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; Download Forms </div>
  <!-- end .container -->
</div>
<!-- end #breadcrumbs -->
<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">


<div class="aRzPageContent">
<table width="999">
  <tbody>
    <tr>
      <th>Subject</th>
    </tr>
 @foreach($download_forms as $item)
    <tr>
      <td>
        <a href="{{ 'storage/'.$item->down_form }}">Noc Application Form</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<div class="clear"></div></div>      </div>
      <!-- end .entry -->
    </div>
    <!-- end #content-area -->


  </div>
  <!-- end .container -->
</div>
<!-- end #content -->

@endsection