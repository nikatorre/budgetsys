@extends('layouts.app')

@section('content')
  @push('head')
      <!-- Start datatable css -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
  @endpush
  <div class="main-content-inner">
      <div class="row">
          <!-- data table start -->
          <div class="col-12 mt-5">
              <div class="card">
                  <div class="card-body">
                      <h4 class="header-title d-inline">List of UACS Codes</h4>
                      <button type="button" class="btn btn-rounded btn-primary btn-sm mb-3 d-inline float-right" data-toggle="modal" data-target="#add_uacs">Add Code</button>
                      <div class="data-tables">
                          <table id="dataTable" class="text-center">
                              <thead class="bg-light text-capitalize">
                                  <tr>
                                      <th>#</th>
                                      <th>Description</th>
                                      <th>Code</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @if (count($uacs) > 0)
                                      @foreach ($uacs as $uac)
                                          <tr>
                                              <td></td>
                                              <td>{{ $uac->name_uacs }}</td>
                                              <td>{{ $uac->code_uacs }}</td>
                                              <td>
                                                  <button class="btn btn-xs btn-circle  btn-primary" data-toggle="modal" data-target="#update_uacs" data-name="{{ $uac->name_code }}" data-id="{!! base64_encode($uac->id) !!}" title="Update">
                                                    <i class="fa fa-pencil"></i>
                                                  </button>
                                              </td>
                                          </tr>
                                      @endforeach
                                  @endif
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- data table end -->
      </div>
  </div>
    @include('uacs.modals.add_uacs')

    @push('script')
        <!-- Start datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    @endpush
@endsection
