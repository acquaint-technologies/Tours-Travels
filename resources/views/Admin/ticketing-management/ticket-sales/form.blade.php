@extends('Admin.layouts.app')

@php
    if (isset($ticketSale->id)){
        $route = route($controllerInfo->routeNamePrefix . '.update', $ticketSale->id);
    } else {
        $route = route($controllerInfo->routeNamePrefix . '.store');
        $ticketSale = new \App\TicketSale();
    }
@endphp

@section('page_title', $controllerInfo->title)
@if(isset($ticketSale->id))
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
                    @if(isset($ticketSale->id)) Update @else Create @endif {{ $controllerInfo->title }}
                </h3>
            </div>
        </div>

    <!--begin::Form-->
        <form id="group-form" action="{{ $route }}" method="POST"
              class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">
                @csrf
                @if(isset($ticketSale->id)) @method('PUT') @endif
                <div class="form-group row">
                    <label for="ticketing_airline_id" class="col-2 col-form-label text-right">
                        Airlines Name *
                    </label>
                    <div class="col-10">
                        <select class="form-control kt-selectpicker" data-size="10"
                                data-live-search="true"
                                name="ticketing_airline_id" id="ticketing_airline_id"
                                @change="getPresentPoliceStation($event)">
                            <option value="">Select Airlines</option>
                            @foreach($ticketingAirlines as $airlines)
                                <option
                                    value="{{ $airlines->id }}"
                                    {{ old('ticketing_airline_id', $ticketSale->ticketing_airline_id) == $airlines->id ? 'selected' : '' }}>
                                    {{ $airlines->airlines_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ticket_no" class="col-2 col-form-label">
                        Ticket No *
                    </label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="ticket_no" name="ticket_no"
                               value="{{ old('ticket_no', $ticketSale->ticket_no) }}" placeholder="Airlines Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passenger_name" class="col-2 col-form-label">Passenger Name *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="passenger_name" name="passenger_name"
                               value="{{ old('passenger_name', $ticketSale->passenger_name) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sector" class="col-2 col-form-label">Sector *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="sector" name="sector"
                               value="{{ old('sector', $ticketSale->sector) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="flight_date" class="col-2 col-form-label">Flight Date *</label>
                    <div class="col-10">
                        <input class="form-control kt-datepicker" type="text" id="flight_date" name="flight_date"
                               value="{{ old('flight_date', $ticketSale->flight_date) }}" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="class" class="col-2 col-form-label">Class *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="class" name="class"
                               value="{{ old('class', $ticketSale->class) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pax_type" class="col-2 col-form-label">Pax Type *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="pax_type" name="pax_type"
                               value="{{ old('pax_type', $ticketSale->pax_type) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sales_date" class="col-2 col-form-label">Sales Date *</label>
                    <div class="col-10">
                        <input class="form-control kt-datepicker" type="text" id="sales_date" name="sales_date"
                               value="{{ old('sales_date', $ticketSale->sales_date) }}" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="amount_sales" class="col-2 col-form-label">Sales Amount *</label>
                    <div class="col-10">
                        <input class="form-control" type="number" id="amount_sales" name="amount_sales"
                               value="{{ old('amount_sales', $ticketSale->amount_sales) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="invoice_no" class="col-2 col-form-label">Invoice No *</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="invoice_no" name="invoice_no"
                               value="{{ old('invoice_no', $ticketSale->invoice_no) }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sales_user_address" class="col-2 col-form-label">Sales User Address</label>
                    <div class="col-10">
                        <textarea class="form-control" id="sales_user_address"
                                  name="sales_user_address"
                                  rows="5"
                                  placeholder="Address">{{ old('sales_user_address', $ticketSale->sales_user_address) }}</textarea>
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
            $('#ticket-management-mm').addClass('kt-menu__item--submenu kt-menu__item--open kt-menu__item--here');
            $('#ticket-sales-sm').addClass('kt-menu__item--active');
        });
    </script>
@endpush
