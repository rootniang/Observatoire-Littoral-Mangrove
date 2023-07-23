<x-guest-layout>
    <div class="container masection">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
            <div class="row g-0">
                <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center mb-4">
                    <img src="{{asset('build/assets/images/logo.png')}}"
                        style="width: 185px;" alt="logo">
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nom d'utilisateur</label>
                            <x-input-error :messages="$errors->get('email')"/>
                            <input type="email" id="email" name="email" class="form-control" placeholder="user@mangrove.com"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Mot de passe</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <input type="password" id="password" name="password" class="form-control" placeholder="********************" />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1 btnconnect">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Connexion</button>
                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            
                        </div>

                    </form>

                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Plus qu'un choix ...</h4>
                    <p class="small mb-4">« Se réunir est un début, rester ensemble est un progrès, travailler ensemble est la réussite »</p>
                    <h4 class="mb-4">... mais un devoir</h4>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</x-guest-layout>
