@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')

<div class="row">
    <div class="col-md-12">
        <div class="tile">
        
            <form action="{{ route('admin.visa-info.update',$visa_info->id) }}" method="POST" role="form">
                @csrf
                
                  <input type="hidden" name="id" value="{{ $visa_info->id }}">
                  <div class="form-group">
                      <label style="font-size: 18px;font-weight: bold;" for="">{{ $pageTitle }}</label>
                      <textarea class="form-control" name="description" id="education">{!! $visa_info->description !!}</textarea>
                      
                  </div>
                  <div class="form-group">
                       <input type="submit" name="" class="btn btn-info" value="Save Visa Info">
                  </div>
             </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">

    CKEDITOR.replace('education', {
      height: 400,
      baseFloatZIndex: 10005
    });

</script>

@endpush