@extends('layout.master')

@section('section_title', 'Test 3')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
@endpush


    <div class="card">
        <div class="card-header">
            Blade test
        </div>
        <div class="card-body">

            <div class="row mb-5">

                <h6>
                    Customer billing address
                </h6>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="col">
                @include('layout.countrycomponent')
                    <!-- <div class="mb-3">
                        <label for="BillingAddress" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="BillingAddress" class="form-select" name="customer_delivery_address">
                            <option value="GB">United Kingdom</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div> -->
                </div>

                <div class="col-12">
                    <hr>
                </div>
            </div>

            <div class="row mb-5">

                <h6>
                    Customer shipping address
                </h6>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="col">
                @include('layout.countrycomponent')
                    <!-- <div class="mb-3">
                        <label for="ShippingAddress" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="ShippingAddress" class="form-select" name="customer_shipping_address">
                            <option value="GB">United Kingdom</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div> -->
                </div>

                <div class="col-12">
                    <hr>
                </div>
            </div>

            <div class="row mb-5">

                <h6>
                    Company address
                </h6>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="col">
                @include('layout.countrycomponent')
                    <!-- <div class="mb-3">
                        <label for="CompanyAddress" class="form-label">Country <span class="text-danger">*</span></label>
                        <select id="CompanyAddress" class="form-select" name="company_address">
                            <option value="GB">United Kingdom</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div> -->
                </div>

                <div class="col-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="btn btn-primary disabled" disabled>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

  

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('select').select2({
        theme: 'bootstrap-5'
    });
</script>
@endpush