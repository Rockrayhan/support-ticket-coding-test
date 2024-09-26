<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Error Alert -->
  @if (session('error'))
  <div class="mb-4 text-center text-red-600">
      {{ session('error') }}
  </div>
@endif


 <!-- Validation Errors -->
 @if ($errors->any())
 <div class="mb-4 bg-red-500 text-white p-4 rounded">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif

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

        
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="block mt-4">
                <a href="/register"> <u>New Customer ? Please Register</u> </a>
             </div>
        </div>

  
    </form>
</x-guest-layout>
