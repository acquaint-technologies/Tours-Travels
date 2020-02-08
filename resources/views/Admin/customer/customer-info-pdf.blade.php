@extends('layouts.pdf')

@push('css')
    <style>
        .info-row {
            font-size: 120%;
            line-height: 1.9em;
        }
    </style>
@endpush

@section('page_title', 'Customer')
@section('page_tagline', $customer->full_name)

@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon" onclick="printData('customer_info')"><i
                        class="kt-font-brand flaticon2-line-chart"></i></span>
                <h3 class="kt-portlet__head-title">
                    View Customer
                </h3>
            </div>
            <div class="float-right mt-3">
            </div>
        </div>
        <div class="kt-portlet__body" id="customer_info">
            <link href="{{my_asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--head-sm" data-ktportlet="true" id="kt_portlet_tools_1">
                <div class="kt-bg-light-dark kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            General Information
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="row">
                            <div class="col-9">
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Full Name <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->full_name }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Father's Name <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->father_name }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Mother's Name <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->mother_name }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Date Of Birth <span
                                            class="float-right">:</span>
                                    </div>
                                    <div
                                        class="col-9 info-value">{{ $customer->date_of_birth ? \Carbon\Carbon::parse($customer->date_of_birth)->format('d F, Y') : '' }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Resident Type <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->resident_type }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Gender <span
                                            class="float-right">:</span></div>
                                    <div
                                        class="col-9 info-value">{{ $customer->gender == 1 ? 'Male' : 'Female' }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Type <span
                                            class="float-right">:</span></div>
                                    <div
                                        class="col-9 info-value">{{ $customer->type == 1 ? 'Individual' : 'Group' }}</div>
                                </div>
                                @if($customer->type == 2)
                                    <div class="row info-row">
                                        <div class="col-3 info-key font-weight-bolder">Group <span
                                                class="float-right">:</span>
                                        </div>
                                        <div class="col-9 info-value">
                                            {{ $customer->group ? $customer->group->group_name : '' }}
                                        </div>
                                    </div>
                                @endif
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Management <span
                                            class="float-right">:</span>
                                    </div>
                                    <div
                                        class="col-9 info-value">{{ $customer->management == 1 ? 'Private' : 'Government' }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">NID <span
                                            class="float-right">:</span></div>
                                    <div class="col-9 info-value">{{ $customer->nid_number }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Birth Certificate Number
                                        <span
                                            class="float-right">:</span></div>
                                    <div
                                        class="col-9 info-value">{{ $customer->birth_certificate_number }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Occupation <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->occupation }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Passport ID <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">
                                        {{ $customer->passport ? $customer->passport->passport_no : '' }}
                                    </div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Mobile <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->mobile }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Email <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">{{ $customer->email }}</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-3 info-key font-weight-bolder">Marital Status <span
                                            class="float-right">:</span>
                                    </div>
                                    <div class="col-9 info-value">
                                        {{ $customer->marital_status == 1 ? 'Single' : ($customer->marital_status ? 'Married' : 'Others') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="kt-portlet__content">
                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                        <div class="kt-avatar__holder" id="avatar__holder">
                                            @if($customer->photo)
                                                <img
                                                    src="{{ my_asset('uploads/customers/images').'/'. $customer->photo }}"
                                                    alt="{{ $customer->photo }}"
                                                    style="width: 150px; height: 180px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--head-sm" data-ktportlet="true" id="kt_portlet_tools_1">
                <div class="kt-bg-light-dark kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Address
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Current Address <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->current_address }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Current Police Station <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->current_police_station }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Current District <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->current_district }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Current Postcode <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->current_postcode }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Permanent Address <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->permanent_address }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Permanent Police Station <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->permanent_police_station }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Permanent District <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->permanent_district }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Permanent Postcode <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->permanent_postcode }}</div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->


            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--head-sm" data-ktportlet="true" id="kt_portlet_tools_1">
                <div class="kt-bg-light-dark kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Others Information
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Spouse Name <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">{{ $customer->spouse_name }}</div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Dependent Name <span class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">
                            @if($customer->dependent)
                                <a href="{{ route('customer.show', $customer->dependent->id) }}">{{ $customer->dependent->full_name }}
                                    <i style="padding: 0.1rem 0.4rem;"
                                       class="btn btn-brand btn-font-lg btn-pill btn-xs circle flaticon-information ml-4"
                                       data-offset="60px 0px" data-toggle="kt-tooltip" data-placement="top"
                                       title=""
                                       data-original-title="Show the Customer Details"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row info-row">
                        <div class="col-3 info-key font-weight-bolder">Maharam Name <span
                                class="float-right">:</span>
                        </div>
                        <div class="col-9 info-value">
                            @if($customer->maharam)
                                <a href="{{ route('customer.show', $customer->maharam->id) }}">{{ $customer->maharam->full_name }}
                                    <i style="padding: 0.1rem 0.4rem;"
                                       class="btn btn-brand btn-font-lg btn-pill btn-xs circle flaticon-information ml-4"
                                       data-offset="60px 0px" data-toggle="kt-tooltip" data-placement="top"
                                       title=""
                                       data-original-title="Show the Customer Details"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <!--end::Portlet-->
@endsection