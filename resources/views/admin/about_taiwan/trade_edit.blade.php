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
        
            <form action="{{ route('admin.trade.update',$trade->id) }}" method="POST" role="form">
                @csrf
                
                  <input type="hidden" name="id" value="{{ $trade->id }}">
                  <div class="form-group">
                      <label style="font-size: 18px;font-weight: bold;" for="">{{ $pageTitle }}</label>
                      <textarea class="form-control" name="description" id="education">{!! $trade->description !!}</textarea>
                      
                  </div>
                  <div class="form-group">
                       <input type="submit" name="" class="btn btn-info" value="Save Trade and Economy Info">
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