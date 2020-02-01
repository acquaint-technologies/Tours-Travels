@extends('dashboard::layouts.app')

@section('page_title', 'Passport')
@if(isset($passport->id))
    @section('page_tagline', 'Update Passport')
@else
    @section('page_tagline', 'Create Passport')
@endif

@section('content')
    @include('dashboard::msg.message')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    @if(isset($passport->id)) Update @else Create @endif Passport
                </h3>
            </div>
        </div>

    @php
        if (isset($passport->id)){
            $route = route('passport-info.update', $passport->id);
        }else {
            $route = route('passport-info.store');
            $passport = new \App\CustomerPassport();
        }
    @endphp
    <!--begin::Form-->
        <form id="menu-form" action="{{ $route }}" method="POST"
              class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">
                @csrf
                @if(isset($passport->id)) @method('PUT') @endif
                <div class="form-group row">
                    <label for="passport_no" class="col-2 col-form-label">
                        Passport Number *
                    </label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="passport_no" name="passport_no"
                               value="{{ old('passport_no', $passport->passport_no) }}" placeholder="Passport Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passport_type" class="col-2 col-form-label">Passport Type *</label>
                    <div class="col-10">
                        <select class="form-control kt-selectpicker" name="passport_type" id="passport_type">
                            <option value="1" {{ old('passport_type', $passport->passport_type) == 1 || old('passport_type', $passport->passport_type) == null ? 'selected' : '' }}>
                                General
                            </option>
                            <option value="2" {{ old('passport_type', $passport->passport_type) == 2 ? 'selected' : '' }}>
                                Government
                            </option>
                            <option value="3" {{ old('passport_type', $passport->passport_type) == 3 ? 'selected' : '' }}>
                                Others
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="issue_date" class="col-2 col-form-label">Issue Date *</label>
                    <div class="col-10">
                        <input class="form-control kt-datepicker" type="text" id="issue_date" name="issue_date"
                               value="{{ \Carbon\Carbon::parse(old('issue_date', $passport->issue_date))->format('d-m-Y') }}" placeholder="Issue Date" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="expiry_date" class="col-2 col-form-label">Expiry Date *</label>
                    <div class="col-10">
                        <input class="form-control kt-datepicker" type="text" id="expiry_date" name="expiry_date"
                               value="{{ \Carbon\Carbon::parse(old('expiry_date', $passport->expiry_date))->format('d-m-Y') }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="issue_location" class="col-2 col-form-label">Issue Location</label>
                    <div class="col-10">
                        <textarea class="form-control" type="text" id="issue_location" name="issue_location"
                                  rows="5"
                                  placeholder="Address">{{ old('issue_location', $passport->issue_location) }}</textarea>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <a href="{{ route('passport-info.index') }}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--end::Portlet-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#passport-management-mm').addClass('kt-menu__item--submenu kt-menu__item--open kt-menu__item--here');
            $('#add-passport-information-sm').addClass('kt-menu__item--active');
        });
    </script>
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('js/pages/passport.js') }}" type="text/javascript"></script>

    <!--end::Page Scripts -->
@endpush
