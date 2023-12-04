<section>
    <header>
        <h2>
            {{ __('Update Password') }}
        </h2>

        <p>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="current_password" class="form-label">{{__('Current Password')}}</label>
            <input  type="password" class="form-control" name="current_password" id="current_password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">{{__('New Password')}}</label>
            <input  type="password" class="form-control" name="password" id="password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>  
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{__('Confirm Password')}}</label>
            <input  type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>                                              

        
        <div class="mb-3">
            <button type="submit" class="form-control btn btn-dark">Enregister</button>
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
