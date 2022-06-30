@extends('layout.master')

@section('section_title', 'Test 4')

@section('content')
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">

            @if( session()->has('error') )
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            <form class="row mb-5" action="{{ route('test-4.login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email address">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="col">
                    <button class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection