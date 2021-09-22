@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
        <a href="{{ route('admin.work-permit.create') }}" class="btn btn-primary pull-right">Add Work Permit</a>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Name </th>
                                    <th> Nationality </th>
                                    <th class="text-center"> Gender </th>
                                    <th class="text-center"> Visa No </th>
                                    <th class="text-center"> Passport No </th>
                                    <th class="text-center"> Visa Expire </th>
                                    <th class="text-center"> Passport Expire </th>
                                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($permitlists as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->expatriaes_name }}</td>
                                        <td>{{ $item->country->nationality }}</td>
                                        <td class="text-center">
                                            @if ($item->gender == 0)
                                                <span class="badge badge-success">Male</span>
                                            @else
                                                <span class="badge badge-info">Female</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ $item->visa_no }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->passport_no }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->visa_expiry_date }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->passport_expiry_date }}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Second group">
                                                <a href="{{ route('admin.work-permit.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger" onclick="deletePost({{ $item->id }})"><i class="fa fa-trash"></i></a>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.work-permit.destroy', $item->id) }}" method="POST" style="display: none;">
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
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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