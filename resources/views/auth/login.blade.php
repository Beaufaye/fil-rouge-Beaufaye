{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.style')
</head>
<body>
  <section class="v" style="background-color: rgb(87, 87, 214);">
    <div class="container py-5 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block bg- text-center">
                <img src="assets\img\logo2.png"
                  alt="login form" style="margin-top: 220px" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center bg-secondary">
                <div class="card-body p-4 p-lg-5 text-black">
                  <div class="text-center">
                    <img src="assets\img\auth.png" style="width: 150px">
                  </div>
                  <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                    @csrf
                  
                    <h5 class="text-center" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
  
                    <div class="form-outline mb-4">
                      <label class="form-label text-light" for="form2Example17">Email</label>
                      <input type="text" id="form2Example17" class="form-control form-control-lg bg-secondary" name="email" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label text-light" for="form2Example27">Mot de passe</label>
                      <input type="password" id="form2Example27" class="form-control form-control-lg bg-secondary" name="password"/>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-danger btn-lg btn-block" type="submit">Connectez-vous</button>
                      @if (Route::has('password.request'))
                      <a class="text-light" href="{{ route('password.request') }}">
                          {{ __('Mot de passe oublié?') }}
                      </a>
                  @endif
                    </div>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
