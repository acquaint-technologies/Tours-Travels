@extends('dashboard::layouts.app')

@push('css')
    <!-- Datatables -->
    <link href="{{asset('vendor/dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet">
@endpush

@section('page_title', $controllerInfo->title)
@section('page_tagline', $controllerInfo->title . ' List')

@section('content')
    @include('dashboard::components.delete-modal')
    @include('dashboard::msg.message')
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--mobile" id="deposit_page">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-line-chart"></i></span>
                <h3 class="kt-portlet__head-title">
                    {{ $controllerInfo->title }} List
                </h3>
            </div>
            <div class="float-right mt-3">

            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Passport Number</th>
                    <th>Date Of Birth</th>
                    <th>Passport Type</th>
                    <th>Passport Issue Date</th>
                    <th>Passport Expiry Date</th>
                    <th>Passport Issue Location</th>
                </tr>
                </thead>
                <tbody>
                @foreach($passports as $passport)
                    <tr id="tr-{{ $passport->id }}">
                        <td scope="row">{{ $passport->full_name }}</td>
                        <td scope="row">{{ $passport->passport_no }}</td>
                        <td>{{ $passport->date_of_birth ? \Carbon\Carbon::parse($passport->date_of_birth)->format('d-m-Y') : '' }}</td>
                        <td>{{ ($passport->passport_type == 1) ? 'General' : (($passport->passport_type == 2) ? 'Government' : 'Others') }}</td>
                        <td>{{ \Carbon\Carbon::parse($passport->issue_date)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($passport->expiry_date)->format('d-m-Y') }}</td>
                        <td>{{ $passport->issue_location }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
    <!--end::Portlet-->
@endsection

@push('scripts')
    @include('dashboard::scripts.delete')
    <!-- Datatables -->
    <script src="{{asset('vendor/dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#reports-mm').addClass('kt-menu__item--submenu kt-menu__item--open kt-menu__item--here');
            $('#passport-report-sm').addClass('kt-menu__item--active');
            $('.table').DataTable({
                responsive: {
                    details: false
                }
            });
        });
    </script>
@endpush
