<section>
    <header>
        <h2>
            {{ __('Profile Information') }}
        </h2>

        <p>
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input  type="text" class="form-control" name="prenom" id="prenom" value="{{ $user->prenom }}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input  required type="text" class="form-control" name="nom" id="nom" value="{{ $user->nom }}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Email</label>
             <input  type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Date de naissance</label>
             <input  type="date" class="form-control" name="email" id="email" value="{{ $user->date_de_naissance }}">
        </div>


        <div class="mb-3">
            <button type="submit" class="form-control btn btn-success">Enregister</button>
            @if (session('status') === 'profile-updated')
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
