@extends('dashboard::layouts.app')

@php
    if (isset($vehicle->id)){
        $route = route($controllerInfo->routeNamePrefix . '.update', $vehicle->id);
    } else {
        $route = route($controllerInfo->routeNamePrefix . '.store');
        $vehicle = new \App\Vehicle();
    }
@endphp

@section('page_title', $controllerInfo->title)
@if(isset($vehicle->id))
    @section('page_tagline', 'Update '.$controllerInfo->title)
@else
    @section('page_tagline', 'Create '.$controllerInfo->title)
@endif

@section('content')
    @include('dashboard::msg.message')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    @if(isset($vehicle->id)) Update @else Create @endif {{ $controllerInfo->title }}
                </h3>
            </div>
        </div>

    <!--begin::Form-->
        <form id="group-form" action="{{ $route }}" method="POST"
              class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">
                @csrf
                @if(isset($vehicle->id)) @method('PUT') @endif
                <div class="form-group row">
                    <label for="vehicle_name" class="col-2 col-form-label">
                        Vehicle Name *
                    </label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="vehicle_name" name="vehicle_name"
                               value="{{ old('vehicle_name', $vehicle->vehicle_name) }}" placeholder="Vehicle Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cost" class="col-2 col-form-label">Vehicle Cost *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="cost" name="cost"
                               value="{{ old('cost', $vehicle->cost) }}" placeholder="1000.00" required>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <a href="{{ route($controllerInfo->routeNamePrefix . '.index') }}" class="btn btn-primary">Cancel</a>
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
            $('#makka-madina-management-mm').addClass('kt-menu__item--submenu kt-menu__item--open kt-menu__item--here');
            $('#vehicle-rate-list-sm').addClass('kt-menu__item--active');
        });
    </script>
@endpush
