{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
              <div class="col-md-6 col-lg-5 d-none d-md-block bg-warning">
                <img src="assets\img\logod.png"
                  alt="login form" class="img-fluid" style="margin-top: 100px" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Créez un compte</h5>
  
                    <div class="form-outline mb-4">
                        <label class="form-label text-primary" for="form2Example17">Nom</label>
                        <input type="text" id="form2Example17" class="form-control form-control-lg" name="name" />
                      </div>

                    <div class="form-outline mb-4">
                      <label class="form-label text-primary" for="form2Example17">Email</label>
                      <input type="text" id="form2Example17" class="form-control form-control-lg" name="email" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label text-primary" for="form2Example27">Mot de passe</label>
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label text-primary" for="form2Example27">Confirmez le mot de passe</label>
                        <input type="password" id="form2Example27" class="form-control form-control-lg" name="password_confirmation"/>
                      </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Inscrivez-vous</button>
                     
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
