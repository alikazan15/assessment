@extends('layout.master')

@section('section_title', 'Test 4')

@section('content')
    <div class="card">
        <div class="card-header">
            My account
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col">
                    <ul>
                        <li>
                            Name: {{ $user->name ?? '-' }}
                        </li>
                        <li>
                            Email address: {{ $user->email ?? '-' }}
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection