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
                    <th>Customer Name</th>
                    <th>Serial No.</th>
                    <th>Year</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Departure Status</th>
                    <th>Paid Amount</th>
                    <th>Remaining Amount</th>
                    <th>Payment Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hajis as $haji)
                    <tr id="tr-{{ $haji->id }}">
                        <td scope="row">{{ $haji->customer ? $haji->customer->full_name : '' }}</td>
                        <td>{{ $haji->serial_no }}</td>
                        <td>{{ $haji->year }}</td>
                        <td>{{ $haji->start_date }}</td>
                        <td>{{ $haji->end_date }}</td>
                        <td>{{ $haji->departure_status_title }}</td>
                        <td>{{ $haji->paid_amount }}</td>
                        <td>{{ $haji->due_amount }}</td>
                        <td>{{ $haji->payment_status_title }}</td>
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
            $('#omra-haji-report-sm').addClass('kt-menu__item--active');
            $('.table').DataTable({
                responsive: {
                    details: false
                }
            });
        });
    </script>
@endpush
