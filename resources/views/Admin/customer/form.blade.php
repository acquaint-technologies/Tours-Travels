@extends('dashboard::layouts.app')

@section('page_title', 'Customer')
@if(isset($customer->id))
    @section('page_tagline', 'Update Customer')
@else
    @section('page_tagline', 'Add New Customer')
@endif

@push('css')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('vendor/dashboard/assets/css/pages/wizard/wizard-3.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->
@endpush

@section('content')
    @include('dashboard::msg.message')
    <!--begin::Portlet-->
    <div class="kt-portlet" id="customer_page">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    @if(isset($customer->id)) Update @else Add New @endif Customer
                </h3>
            </div>
        </div>

        @php
            if (isset($customer->id)){
                $route = route('customer.update', $customer->id);
            } else {
                $route = route('customer.store');
                $customer = new \App\Customer();
            }
        @endphp

        <div class="kt-portlet__body">
            <div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3"
                             data-ktwizard-state="step-first">
                            <div class="kt-grid__item">

                                <!--begin: Form Wizard Nav -->
                                <div class="kt-wizard-v3__nav">
                                    <div class="kt-wizard-v3__nav-items kt-wizard-v3__nav-items--clickable">

                                        <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                        <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step"
                                             data-ktwizard-state="current">
                                            <div class="kt-wizard-v3__nav-body">
                                                <div class="kt-wizard-v3__nav-label">
                                                    <span>1</span> General Information
                                                </div>
                                                <div class="kt-wizard-v3__nav-bar"></div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                                            <div class="kt-wizard-v3__nav-body">
                                                <div class="kt-wizard-v3__nav-label">
                                                    <span>2</span> Address
                                                </div>
                                                <div class="kt-wizard-v3__nav-bar"></div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                                            <div class="kt-wizard-v3__nav-body">
                                                <div class="kt-wizard-v3__nav-label">
                                                    <span>3</span> Others
                                                </div>
                                                <div class="kt-wizard-v3__nav-bar"></div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
                                            <div class="kt-wizard-v3__nav-body">
                                                <div class="kt-wizard-v3__nav-label">
                                                    <span>4</span> Passport Information
                                                </div>
                                                <div class="kt-wizard-v3__nav-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Nav -->
                            </div>
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form class="kt-form" id="kt_form" action="{{ $route }}" method="post">

                                    <!--begin: Form Wizard Step 1-->
                                    <div class="kt-wizard-v3__content" data-ktwizard-type="step-content"
                                         data-ktwizard-state="current">
                                        @csrf
                                        @if(isset($customer->id)) @method('PUT') @endif
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group row">
                                                    <label for="full_name"
                                                           class="col-3 col-form-label text-right text-right">
                                                        Full Name *
                                                    </label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="full_name"
                                                               name="full_name"
                                                               value="{{ old('full_name', $customer->full_name) }}"
                                                               placeholder="Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tracking_no" class="col-3 col-form-label text-right">Tracking
                                                        No.
                                                        *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="tracking_no"
                                                               name="tracking_no"
                                                               value="{{ old('tracking_no', $customer->tracking_no) }}"
                                                               placeholder="Tracking No." required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="father_name" class="col-3 col-form-label text-right">Father's
                                                        Name
                                                        *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="father_name"
                                                               name="father_name"
                                                               value="{{ old('father_name', $customer->father_name) }}"
                                                               placeholder="Father's Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mother_name" class="col-3 col-form-label text-right">Mother's
                                                        Name
                                                        *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="mother_name"
                                                               name="mother_name"
                                                               value="{{ old('mother_name', $customer->mother_name) }}"
                                                               placeholder="Mother's Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="date_of_birth" class="col-3 col-form-label text-right">Date
                                                        of
                                                        Birth
                                                        *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="date_of_birth"
                                                               name="date_of_birth"
                                                               value="{{ \Carbon\Carbon::parse(old('date_of_birth', $customer->date_of_birth))->format('d-m-Y') }}"
                                                               placeholder="Date of Birth" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="resident_type" class="col-3 col-form-label text-right">Resident
                                                        Type</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker"
                                                                name="resident_type"
                                                                id="resident_type"
                                                                @change="changeGender($event)">
                                                            <option
                                                                value="Bangladeshi" {{ old('resident_type', $customer->resident_type) !== 'NRB' ? 'selected' : '' }}>
                                                                Bangladeshi
                                                            </option>
                                                            <option
                                                                value="NRB" {{ old('resident_type', $customer->resident_type) === 'NRB' ? 'selected' : '' }}>
                                                                NRB
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="gender" class="col-3 col-form-label text-right">Gender
                                                        *</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" name="gender"
                                                                id="gender"
                                                                @change="changeGender($event)">
                                                            <option
                                                                value="1" {{ old('gender', $customer->gender) !== 2 ? 'selected' : '' }}>
                                                                Male
                                                            </option>
                                                            <option
                                                                value="2" {{ old('gender', $customer->gender) === 2 ? 'selected' : '' }}>
                                                                Female
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="marital_status" class="col-3 col-form-label text-right">
                                                        Marital Status *</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker"
                                                                name="marital_status"
                                                                id="marital_status" required>
                                                            <option
                                                                value="1" {{ old('marital_status', $customer->marital_status) !== 2 || old('marital_status', $customer->marital_status) !== 3 ? 'selected' : '' }}>
                                                                Single
                                                            </option>
                                                            <option
                                                                value="2" {{ old('marital_status', $customer->marital_status) === 2 ? 'selected' : '' }}>
                                                                Married
                                                            </option>
                                                            <option
                                                                value="3" {{ old('marital_status', $customer->marital_status) === 3 ? 'selected' : '' }}>
                                                                Others
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group row">
                                                    <label for="type" class="col-3 col-form-label text-right">Type
                                                        *</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" name="type"
                                                                id="type"
                                                                @change="changeType($event)">
                                                            <option
                                                                value="1" {{ old('type', $customer->type) !== 2 ? 'selected' : '' }}>
                                                                Individual
                                                            </option>
                                                            <option
                                                                value="2" {{ old('type', $customer->type) === 2 ? 'selected' : '' }}>
                                                                Group
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row" v-if="type == 2">
                                                    <label for="group_id" class="col-3 col-form-label text-right">Group
                                                        *</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" data-size="7"
                                                                data-live-search="true"
                                                                name="group_id" id="group_id">
                                                            @foreach($groups as $group)
                                                                <option
                                                                    value="{{ $group->id }}"
                                                                    {{ old('group_id', $customer->group_id) === $group->id ? 'selected' : '' }}>
                                                                    {{ $group->group_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="management"
                                                           class="col-3 col-form-label text-right">Management</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" name="management"
                                                                id="management">
                                                            <option
                                                                value="1" {{ old('management', $customer->management) !== 2 ? 'selected' : '' }}>
                                                                Private
                                                            </option>
                                                            <option
                                                                value="2" {{ old('management', $customer->management) === 2 ? 'selected' : '' }}>
                                                                Government
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="identity" class="col-3 col-form-label text-right">Identity
                                                        Type</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" name="identity"
                                                                id="identity"
                                                                @change="changeIdentityType($event)">
                                                            <option
                                                                value="1" {{ old('identity', $customer->identity) !== 2 ? 'selected' : '' }}>
                                                                NID
                                                            </option>
                                                            <option
                                                                value="2" {{ old('identity', $customer->identity) === 2 ? 'selected' : '' }}>
                                                                Birth Certificate
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row" v-if="identity == 1">
                                                    <label for="nid_number" class="col-3 col-form-label text-right">NID
                                                        Number
                                                        *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="nid_number"
                                                               name="nid_number"
                                                               value="{{ old('nid_number', $customer->nid_number) }}"
                                                               placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row" v-if="identity == 2">
                                                    <label for="birth_certificate_number"
                                                           class="col-3 col-form-label text-right">Birth
                                                        Certificate Number *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text"
                                                               id="birth_certificate_number"
                                                               name="birth_certificate_number"
                                                               value="{{ old('birth_certificate_number', $customer->birth_certificate_number) }}"
                                                               placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="occupation"
                                                           class="col-3 col-form-label text-right">Occupation</label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" name="occupation"
                                                                id="occupation">
                                                            <option
                                                                value="Govt. Job" {{ old('occupation', $customer->occupation) === 'Govt. Job' || !old('occupation', $customer->occupation) ? 'selected' : '' }}>
                                                                Govt. Job
                                                            </option>
                                                            <option
                                                                value="Private Job" {{ old('occupation', $customer->occupation) === 'Private Job' ? 'selected' : '' }}>
                                                                Private Job
                                                            </option>
                                                            <option
                                                                value="Others" {{ old('occupation', $customer->occupation) === 'Others' ? 'selected' : '' }}>
                                                                Others
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email"
                                                           class="col-3 col-form-label text-right">Email *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="email" id="email" name="email"
                                                               value="{{ old('email', $customer->email) }}"
                                                               placeholder="@">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mobile"
                                                           class="col-3 col-form-label text-right">Mobile *</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" id="mobile"
                                                               name="mobile"
                                                               value="{{ old('mobile', $customer->mobile) }}"
                                                               placeholder="017XXXXXXXX">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Form Wizard Step 1-->

                                    <!--begin: Form Wizard Step 2-->
                                    <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="kt-heading kt-heading--md text-center">Present Address
                                                    Information
                                                </div>
                                                <div class="form-group row">
                                                    <label for="current_address"
                                                           class="col-4 col-form-label text-right">Current
                                                        Address</label>
                                                    <div class="col-8">
                                                <textarea class="form-control" type="text" id="current_address"
                                                          name="current_address"
                                                          rows="5"
                                                          placeholder="Address">{{ old('current_address', $customer->current_address) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="current_police_station"
                                                           class="col-4 col-form-label text-right">Current
                                                        Police Station</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="text"
                                                               id="current_police_station" name="current_police_station"
                                                               value="{{ old('current_police_station', $customer->current_police_station) }}"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="current_district"
                                                           class="col-4 col-form-label text-right">Current
                                                        District</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="text" id="current_district"
                                                               name="current_district"
                                                               value="{{ old('current_district', $customer->current_district) }}"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="current_postcode"
                                                           class="col-4 col-form-label text-right">Current
                                                        Postcode</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="number" id="current_postcode"
                                                               name="current_postcode"
                                                               value="{{ old('current_postcode', $customer->current_postcode) }}"
                                                               placeholder="0000">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="kt-heading kt-heading--md text-center">Permanent Address
                                                    Information
                                                </div>
                                                <div class="form-group row">
                                                    <label for="permanent_address"
                                                           class="col-4 col-form-label text-right">Permanent
                                                        Address</label>
                                                    <div class="col-8">
                                                <textarea class="form-control" type="text" id="permanent_address"
                                                          name="permanent_address"
                                                          rows="5"
                                                          placeholder="Address">{{ old('permanent_address', $customer->permanent_address) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="permanent_police_station"
                                                           class="col-4 col-form-label text-right">Permanent
                                                        Police Station</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="text"
                                                               id="permanent_police_station"
                                                               name="permanent_police_station"
                                                               value="{{ old('permanent_police_station', $customer->permanent_police_station) }}"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="permanent_district"
                                                           class="col-4 col-form-label text-right">Permanent
                                                        District</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="text" id="permanent_district"
                                                               name="permanent_district"
                                                               value="{{ old('permanent_district', $customer->permanent_district) }}"
                                                               placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="permanent_postcode"
                                                           class="col-4 col-form-label text-right">Permanent
                                                        Postcode</label>
                                                    <div class="col-8">
                                                        <input class="form-control" type="number"
                                                               id="permanent_postcode"
                                                               name="permanent_postcode"
                                                               value="{{ old('permanent_postcode', $customer->permanent_postcode) }}"
                                                               placeholder="0000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Form Wizard Step 2-->

                                    <!--begin: Form Wizard Step 3-->
                                    <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="col-9 offset-3 mb-4">
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <div class="kt-avatar__holder" id="avatar__holder"
                                                             style="@if($customer->photo)background-image: url('{{ asset('uploads/customers/images').'/'. $customer->photo }}');@endif
                                                                 background-size: contain; width: 150px; height: 180px;"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title=""
                                                               data-original-title="Photo">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="photo" accept=".png, .jpg, .jpeg"
                                                                   id="photo" @change="loadFile($event)">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title=""
                                                              data-original-title="Cancel avatar">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="spouse_name" class="col-3 col-form-label text-right">
                                                        Spouse Name
                                                    </label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text"
                                                               id="spouse_name" name="spouse_name"
                                                               value="{{ old('spouse_name', $customer->spouse_name) }}"
                                                               placeholder="Spouse Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="maharam_id" class="col-3 col-form-label text-right">
                                                        Maharam ID
                                                    </label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" data-size="7"
                                                                data-live-search="true"
                                                                name="maharam_id"
                                                                id="maharam_id">
                                                            <option
                                                                value=""
                                                                {{ old('maharam_id', $customer->maharam_id) === null ? 'selected' : '' }}>
                                                                Select a Maharam
                                                            </option>
                                                            @foreach($registered_customers as $registered_customer)
                                                                <option
                                                                    value="{{ $registered_customer->id }}"
                                                                    {{ old('maharam_id', $customer->maharam_id) == $registered_customer->id ? 'selected' : '' }}>
                                                                    {{ $registered_customer->full_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="dependent_id" class="col-3 col-form-label text-right">
                                                        Dependent ID
                                                    </label>
                                                    <div class="col-9">
                                                        <select class="form-control kt-selectpicker" data-size="7"
                                                                data-live-search="true"
                                                                name="dependent_id"
                                                                id="dependent_id">
                                                            <option
                                                                value=""
                                                                {{ old('dependent_id', $customer->dependent_id) === null ? 'selected' : '' }}>
                                                                Select a Dependent
                                                            </option>
                                                            @foreach($registered_customers as $registered_customer)
                                                                <option
                                                                    value="{{ $registered_customer->id }}"
                                                                    {{ old('dependent_id', $customer->dependent_id) == $registered_customer->id ? 'selected' : '' }}>
                                                                    {{ $registered_customer->full_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Form Wizard Step 3-->

                                    <!--begin: Form Wizard Step 4-->
                                    <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
                                        <div class="row">
                                            <div class="col-6">
                                                @if(!$customer->id)
                                                    <div class="form-group row">
                                                        <label for="passport_no"
                                                               class="col-4 col-form-label text-right">
                                                            Passport No
                                                        </label>
                                                        <div class="col-8">
                                                            <input class="form-control" type="text"
                                                                   id="passport_no" name="passport_no"
                                                                   value="{{ old('passport_no', $customer->passport_no) }}"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="issue_date"
                                                               class="col-4 col-form-label text-right">
                                                            Passport Issue Data
                                                        </label>
                                                        <div class="col-8">
                                                            <input class="form-control kt-datepicker" type="text"
                                                                   id="issue_date" name="issue_date"
                                                                   value="{{ \Carbon\Carbon::parse(old('issue_date', $customer->issue_date))->format('d-m-Y') }}"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="expiry_date"
                                                               class="col-4 col-form-label text-right">
                                                            Passport Expiry Data
                                                        </label>
                                                        <div class="col-8">
                                                            <input class="form-control kt-datepicker" type="text"
                                                                   id="expiry_date" name="expiry_date"
                                                                   value="{{ \Carbon\Carbon::parse(old('expiry_date', $customer->expiry_date))->format('d-m-Y') }}"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="issue_location"
                                                               class="col-4 col-form-label text-right">
                                                            Issue Location
                                                        </label>
                                                        <div class="col-8">
                                                            <input class="form-control" type="text"
                                                                   id="issue_location" name="issue_location"
                                                                   value="{{ old('issue_location', $customer->issue_location) }}"
                                                                   placeholder="">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group row">
                                                        <label for="passport_id"
                                                               class="col-3 col-form-label text-right">
                                                            Select Passport
                                                        </label>
                                                        <div class="col-9">
                                                            <select class="form-control kt-selectpicker" data-size="7"
                                                                    data-live-search="true"
                                                                    name="passport_id"
                                                                    id="passport_id">
                                                                <option
                                                                    value=""
                                                                    {{ old('passport_id', $customer->passport_id) === null ? 'selected' : '' }}>
                                                                    Select a Passport
                                                                </option>
                                                                @foreach($passports as $passport)
                                                                    <option
                                                                        value="{{ $passport->id }}"
                                                                        {{ old('passport_id', $customer->passport_id) == $passport->id ? 'selected' : '' }}>
                                                                        {{ $passport->passport_no }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Form Wizard Step 4-->

                                    <!--begin: Form Actions -->
                                    <div class="kt-form__actions">
                                        <button
                                            class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-prev">
                                            Previous
                                        </button>
                                        <button
                                            class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-submit">
                                            Submit
                                        </button>
                                        <button
                                            class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-next">
                                            Next Step
                                        </button>
                                    </div>

                                    <!--end: Form Actions -->
                                </form>

                                <!--end: Form Wizard Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Portlet-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#Customer-management-mm').addClass('kt-menu__item--submenu kt-menu__item--open kt-menu__item--here');
            $('#add-new-customer-sm').addClass('kt-menu__item--active');
        });

        var customer_type = "{{ old('type', $customer->type) == null ? 1 : old('type', $customer->type) }}";
        var customer_identity_type = "{{ old('identity', $customer->identity) == null ? 1 : old('identity', $customer->identity) }}";
        var customer_gender = "{{ old('gender', $customer->gender) == null ? 1 : old('gender', $customer->gender) }}";
    </script>
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('js/pages/customer.js') }}" type="text/javascript"></script>

    <!--end::Page Scripts -->
@endpush
