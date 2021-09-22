@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
    	<div class="col-md-12">
          <div class="tile">
            <div class="row">
                <div class="col-lg-6">
                    <h5>Add Usefull Link</h5>
                    <hr>
                 	<form action="{{ route('admin.useful-links.store') }}" method="POST" role="form" enctype="multipart/form-data">
            		@csrf
                        <div class="form-group">
	                        <label for="title"> Usefull Link Title</label>
	                        <input type="text" name="title" class="form-control" placeholder="Usefull Link Title" required="">
                        </div>
	                    <div class="form-group">
                            <label for="title"> Usefull Url</label>
                            <input type="url" name="url" class="form-control" placeholder="Usefull Link" required>
	                    </div>
	                    <div class="form-group">
	                        <input type="submit" class="btn btn-info" value="Add Usefull Link">
	                    </div>
                	</form>

            		<div class="tile">
            			<h3 class="tile-title">Usefull Link List </h3>
		                <div class="tile-body">
		                    <div class="table-responsive">
		                        <table class="table table-hover table-bordered">
		                            <thead>
		                                <tr>
		                                    <th> SL </th>
		                                    <th> Title </th>
		                                    <th> Link </th>
		                                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                @php $i = 1; @endphp
		                                @foreach($useful_links as $item)
		                                    <tr>
		                                        <td>{{ $i++ }}</td>
		                                        <td>{{ $item->title }}</td>
		                                        <td>{{ $item->url }}</td>
		                                       
		                                        <td class="text-center">
		                                            <div class="btn-group" role="group" aria-label="Second group">
		                                                <a href="#" class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})"><i class="fa fa-trash"></i></a>
		                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.useful-links.destroy', $item->id) }}" method="POST" style="display: none;">
		                                                    @csrf
		                                                    @method('DELETE')
		                                                </form>
		                                            </div>
		                                        </td>
		                                    </tr>
		                                @endforeach
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <h5>Add Downloadable Form</h5>
                    <hr>
                    <form action="{{ route('admin.useful-links.form_store') }}" method="POST" role="form" enctype="multipart/form-data">
            		@csrf
                      <div class="form-group">
                        <label for="file"> Add Title</label>
                        <input type="text" name="title" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label for="file"> Add Downloadable form</label>
                        <input type="file" name="down_form"  accept=".docx,.pdf" required="">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Upload Form">
                      </div>
                 	</form>

                 	<div class="tile">
            			<h3 class="tile-title">Downloadable Form List</h3>
		                <div class="tile-body">
		                    <div class="table-responsive">
		                        <table class="table table-hover table-bordered">
		                            <thead>
		                                <tr>
		                                    <th> SL </th>
		                                    <th> Title </th>
		                                    <th>Downloadable Form</th>
		                                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                @php $i = 1; @endphp
		                                @foreach($downloadables as $item)
		                                    <tr>
		                                        <td>{{ $i++ }}</td>
		                                        <td>{{ $item->title }}</td>
		                                        <td>{{ $item->down_form }}</td>
		                                       
		                                        <td class="text-center">
		                                            <div class="btn-group" role="group" aria-label="Second group">
		                                                <a href="#" class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})"><i class="fa fa-trash"></i></a>
		                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.useful-links.form_destroy', $item->id) }}" method="POST" style="display: none;">
		                                                    @csrf
		                                                    @method('DELETE')
		                                                </form>
		                                            </div>
		                                        </td>
		                                    </tr>
		                                @endforeach
		                            </tbody>
		                        </table>
		                    </div>
		                </div>
		            </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

    <script type="text/javascript" src="{{ asset('backend/js/plugins/sweetalert2.all.js') }}"></script>
    <script type="text/javascript">
        function deletePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
