
    
<x-guest-layout>
@if(Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::get('fail'))
            <div class="alert alert-fail"></div>
            {{Session::get('fail')}}
            @endif
    <x-auth-card>

    <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>

        </x-slot>
        
        <h2>User Register</h2>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back To Dashboard</a>
        <form method="POST" action="{{ route('register') }}">
           
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <label class="form-check-label">Role</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="add_question" name="role[]">
                        <label class="form-check-label" for="role">
                            Add Question
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="checker" name="role[]">
                        <label class="form-check-label" for="role">
                            Checker
                        </label>
                    </div>
                </div>
                

            </div>

            <!-- <div class="mt-4">
                <x-input-label for="role" :value="__('Role')" required />
                <x-text-input id="admin" type="checkbox" name="role" :value="__('0')"  />Admin
                <x-text-input id="user"  type="checkbox" name="role" :value="__('1')" />User
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>