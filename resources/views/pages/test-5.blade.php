@extends('layout.master')

@section('section_title', 'Test 5')

@section('content')

    <div class="card">
        <div class="card-header">
            Add person
        </div>
        <div class="card-body">
            <form class="row" action="{{ route('test-5.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="input1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="input1" name="first_name" value="" placeholder="First name">
                </div>
                <div class="mb-3">
                    <label for="input2" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="input2" name="last_name" value="" placeholder="Last name">
                </div>
                <div class="mb-3">
                    <label for="input3" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="input3" name="email" value="" placeholder="Email address">
                </div>

                I Guest Your Age is {{$user->age}} <br>
                I Guest Your Gender is {{$user->gender}} <br>


                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection