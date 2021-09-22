@extends('frontend.app')

@section('content')

<div id="pagetop">
  <div class="container">
    <h1> Useful Links </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; Useful Links </div>
  <!-- end .container -->
</div>
<!-- end #breadcrumbs -->
<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">

<style type="text/css">
/*.aRzPageContent
{
	text-align: justify;
	color: #ffffff;
}*/
</style>
<div class="aRzPageContent">
<h3><strong>Here are some useful links :</strong></h3>
@foreach($useful_links as $item)
<p align="left">{{$item->title}}</p>
<p align="left"><a href="{{$item->url}}">{{$item->url}}</a></p>
@endforeach

<div class="clear"></div></div>      </div>
      <!-- end .entry -->
    </div>
    <!-- end #content-area -->

  </div>
  <!-- end .container -->
</div>
<!-- end #content -->

@endsection