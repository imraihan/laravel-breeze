<x-guest-layout>
    <section class="container">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <img class="w-50 d-none d-md-block" src="{{ asset('images/register.jpg') }}" alt="Register Image">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">{{ __('Register an account') }}</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <!-- Name -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                            <label class="form-check-label text-secondary" for="remember">
                                                {{ __('Keep me logged in') }}
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}" class="link-primary text-decoration-none">{{ __('Forgot password?') }}</a>
                                    </div>
                                </div>

                                <!-- Register Button -->
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <x-primary-button class="btn btn-primary btn-lg">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>
                                </div>

                                <!-- Login Link -->
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">
                                        {{ __('Already have an account?') }}
                                        <a href="{{ route('login') }}" class="link-primary text-decoration-none">{{ __('Sign in') }}</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
