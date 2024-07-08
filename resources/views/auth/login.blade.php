<x-guest-layout>
    <section class="container">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <img class="w-50 d-none d-md-block" src="{{ asset('images/login.jpg') }}" alt="Login Image">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <h2 class="fs-6 fw-normal text-center text-secondary mb-4">{{ __('Sign in to your account') }}</h2>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <!-- Email Address -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="col-12">
                                    <div class="d-flex gap-2 justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                            <label class="form-check-label text-secondary" for="remember_me">
                                                {{ __('Keep me logged in') }}
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="link-primary text-decoration-none">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <x-primary-button class="btn btn-primary btn-lg">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </div>

                                <!-- Registration Link -->
                                <div class="col-12">
                                    <p class="m-0 text-secondary text-center">
                                        {{ __('Don\'t have an account?') }}
                                        <a href="{{ route('register') }}" class="link-primary text-decoration-none">{{ __('Sign up') }}</a>
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
