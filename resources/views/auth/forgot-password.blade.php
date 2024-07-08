<x-guest-layout>
    <section class="container">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <img class="w-50 d-none d-md-block" src="{{ asset('images/reset_password.jpg') }}" alt="Reset Password Image">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="mb-4 text-sm text-gray-600 text-center">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <!-- Email Address -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <x-primary-button class="btn btn-primary btn-lg">
                                            {{ __('Email Password Reset Link') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
