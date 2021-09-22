@php
    $errors = Session::get('error');
    $messages = Session::get('success');
    $info = Session::get('info');
    $warnings = Session::get('warning');
@endphp

@if ($errors) 
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Error!</strong> {{ $errors }}
    </div>
@endif

@if ($messages) 
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Success!</strong> {{ $messages }}
    </div>
@endif

@if ($info) 
    <div class="alert alert-info alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Info!</strong> {{ $info }}
    </div>
@endif

@if ($warnings) 
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button class="close" type="button" data-dismiss="alert">×</button>
        <strong>Warning!</strong> {{ $warnings
         }}
    </div>
@endif