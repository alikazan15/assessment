@extends('layout.master')

@section('section_title', 'Test 1')

@section('content')

    @if( $errors->isNotEmpty() )
        <div class="alert alert-danger">
            @foreach($errors->all() as $message)
                <p>
                    {{ $message }}
                </p>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Register account
        </div>
        <div class="card-body">
            <form class="row" action="{{ route('test-1.submit') }}" method="POST">
                @csrf

                <p>
                    {{ __('lang.test_1') }}
                </p>

                <div class="mb-3">
                    <label for="input1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="input1" name="first_name" value="{{ old('first_name') }}" placeholder="First name">
                </div>
                <div class="mb-3">
                    <label for="input2" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="input2" name="last_name" value="{{ old('last_name') }}" placeholder="Last name">
                </div>
                <div class="mb-3">
                    <label for="input3" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="input3" name="email" value="{{ old('email') }}" placeholder="Email address">
                </div>
                <div class="mb-3">
                    <label for="input4" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="input4" name="phone" value="{{ old('phone') }}" placeholder="Phone number">
                </div>
                <div class="mb-3">
                    <label for="input5" class="form-label">Company</label>
                    <input type="text" class="form-control" id="input5" name="company" value="{{ old('company') }}" placeholder="Company">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection