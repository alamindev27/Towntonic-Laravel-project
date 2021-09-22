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
        
            <form action="{{ route('admin.transportation.update',$transportation->id) }}" method="POST" role="form">
                @csrf
                
                  <input type="hidden" name="id" value="{{ $transportation->id }}">
                  <div class="form-group">
                      <label style="font-size: 18px;font-weight: bold;" for="">Transportation Information</label>
                      <textarea class="form-control" name="description" id="transportation">{!! $transportation->description !!}</textarea>
                      
                  </div>
                  <div class="form-group">
                       <input type="submit" name="" class="btn btn-info" value="Save Transportation Info">
                  </div>
             </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">

    CKEDITOR.replace('transportation', {
      height: 400,
      baseFloatZIndex: 10005
    });

</script>

@endpush