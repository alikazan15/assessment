@extends('layout.master')

@section('section_title', 'Assessment overview')

@section('content')

    <div class="card">
        <div class="card-header">
            {{ ucfirst($type) }} Tests
        </div>
        <div class="card-body">
            <div class="row">

            </div>
            @switch($type)

                @case('laravel')

                    <div class="col">

                        <div class="alert alert-info">
                            Please complete all the tests on a new git <b>branch</b>, branch name should be your <b>full name</b>.
                            <br>
                            Do not work on the <b>master branch</b> as your work will be discarded.
                            <br>
                            Don't forget to run <em>php artisan migrate</em>.
                        </div>

                        <ul>
                            <li class="mb-5">
                                <p>
                                    Test 1: {{ __('lang.test_1') }}
                                    <br>
                                    <small class="badge bg-light text-dark px-3">
                                        Resources: Test1Contoller, test-1.blade
                                    </small>
                                </p>
                            </li>

                            <li class="mb-5">
                                <p>
                                    Test 2: <strong>App\Models\Car</strong> and <strong>App\Model\Invoice</strong>
                                    are using the same scope functions: <strong> scopeIsEnabled</strong> and <strong>scopeIsDisabled</strong>.
                                    <br>
                                    Please refactor them to avoid duplication using your preferred method.
                                    <br>
                                    <small class="badge bg-light text-dark px-3">
                                        Resources: App\Models\Car, App\Model\Invoice
                                    </small>
                                </p>
                            </li>

                            <li class="mb-5">
                                <p> Test 3: </p>
                                <ul>
                                    <li>
                                        <strong>&lt;link&gt;</strong> and <strong>&lt;script&gt;</strong> shouldn't be placed inside <b>@</b><strong>section</strong>, please rectify without putting them in layout/master.
                                    </li>
                                    <li>
                                        <strong>Country</strong> selection code is repeated 3 times on the page, Please refactor it to avoid repetition using your preferred method.
                                    </li>
                                    <li>
                                        <span class="text-muted">Optional:</span>
                                        Replace <span class="text-danger">*</span> with a blade directive.
                                    </li>
                                </ul>
                                <small class="badge bg-light text-dark px-3">
                                    Resources: Test3Controller, test-3.blade
                                </small>
                            </li>
                            <li class="mb-5">
                                <p>
                                    Test 4: The user should not be able to access <a href="{{ route('test-4.my-account') }}">test-4/my-account</a> without logging in!
                                    <br> Please rectify so
                                    <a href="{{ route('test-4.my-account') }}">test-4/my-account</a> redirects to <a href="{{ route('test-4') }}">test-4/</a>
                                    <br>
                                    <small class="badge bg-light text-dark px-3">
                                        Resources: Test4Controller, test-4/login.blade, test-4/my-account.blade
                                    </small>
                                </p>
                            </li>
                            <li class="mb-5">
                                <p>
                                    Test 5: Upon creating a person in the system, you need to:
                                </p>
                                <ul>
                                    <li>Use <strong>Events</strong> to get a prediction of the user's age from
                                        <a href="https://agify.io/">https://agify.io/</a>
                                    </li>
                                    <li>Use <strong>Observers</strong> to get a prediction of the user's gender from
                                        <a href="https://genderize.io/">https://genderize.io/</a> </li>
                                    <li>
                                        Update the person's record with the age and gender results.
                                    </li>
                                </ul>
                                <small class="badge bg-light text-dark px-3">
                                    Resources: Test5Controller, test-5.blade
                                </small>
                            </li>

                            <li class="mb-5">
                                <p class="text-muted">
                                    Optional: If you feel you have the necessary skills, please tackle the following tasks
                                </p>
                                <ul>
                                    <li class="text-muted">Create a controller to view and edit any user, without using <strong>Facades</strong> at all.</li>
                                    <li class="text-muted">Create a test for the above controller.</li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                @break

            @endswitch
        </div>
    </div>

@endsection