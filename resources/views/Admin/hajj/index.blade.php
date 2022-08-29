@extends('Admin.layouts.app')

@push('css')
    <!-- Datatables -->
    <link href="{{asset('vendor/dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet">
@endpush

@section('page_title', getRoutes()->pageTitle(request()->route()))
@section('page_tagline', getRoutes()->getTitleByRoute(request()->route()))

@section('content')
    @include('dashboard::components.delete-modal')
    @include('dashboard::msg.message')
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-line-chart"></i></span>
                <h3 class="kt-portlet__head-title">
                    {{ getRoutes()->getTitleByRoute(request()->route()) }}
                </h3>
            </div>
            @if(\Illuminate\Support\Facades\Route::has($route = getRoutes()->getAsPrefix(request()->route()) . 'create'))
                <div class="float-right mt-3">
                    <a href="{{ route($route) }}" class="btn btn-label-success btn-sm btn-upper">
                        <i class="fa fa-plus"></i> {{ getRoutes()->getTitleByRouteName($route) }}
                    </a>
                </div>
            @endif
        </div>
        <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table
                class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline">
                <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Serial No.</th>
                    <th>Year</th>
                    <th>Tracking No.</th>
                    <th>Mobile Number</th>
                    <th>Departure Status</th>
                    <th>Paid Amount</th>
                    <th>Remaining Amount</th>
                    <th>Payment Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hajis as $haji)
                    <tr id="tr-{{ $haji->id }}">
                        <td scope="row">{{ $haji->customer ? $haji->customer->full_name : '' }}</td>
                        <td>{{ $haji->serial_no }}</td>
                        <td>{{ $haji->year }}</td>
                        <td>{{ $haji->customer->tracking_no }}</td>
                        <td>{{ $haji->customer->mobile }}</td>
                        <td>{{ $haji->departure_status_title }}</td>
                        <td>{{ $haji->paid_amount }}</td>
                        <td>{{ $haji->due_amount }}</td>
                        <td>{{ $haji->payment_status_title }}</td>
                        <td class="text-center">
                            <a href="{{ route('deposit-details.view', $haji->id) }}" class="btn btn-warning btn-sm btn-icon-sm btn-circle"
                               data-skin="brand" data-offset="60px 0px" data-toggle="kt-tooltip" data-placement="top" title="View Payments">
                                <i class="fas fa-money-bill"></i>
                            </a>
                            <a href="{{ route(getRoutes()->getAsPrefix(request()->route()) . 'edit', $haji->id) }}" class="btn btn-primary btn-sm btn-icon-sm btn-circle">
                                <i class="flaticon2-edit"></i>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-sm btn-circle delete-button" data-toggle="modal" data-target="#delete-modal" data-id="{{ $haji->id }}">
                                <i class="flaticon-delete"></i>
                            </button>
                        </td>
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
            $('.table').DataTable({
                responsive: true
            });
        });
    </script>
@endpush
