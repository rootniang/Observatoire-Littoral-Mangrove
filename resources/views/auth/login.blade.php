<x-guest-layout>

    

    <div class="container">
        <div class="register">
        <h2 >Connectez-vous</h2>
        <div class="card m-auto pt-5" >
            <form method="POST" action="{{ route('login') }}" class=" form">
                @csrf
                <div class="mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" >
                    <!-- message d'erreur -->
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <span class="error-message"></span>
                </div>
                <span class="message">*Ne partager jamais votre mot de passe avec un tiers</span>
                <div class="mb-3 mdp">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" >
                    <!-- message d'erreur -->
                    <span class="error-message"></span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <!-- visibilite mot de passe -->
                    <span class="visible" id="visible">
                        <svg width="17" height="17" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.8489 11.8663C22.4952 7.27383 17.8355 4.16663 12.5 4.16663C7.16447 4.16663 2.50345 7.276 0.151018 11.8667C0.0517306 12.0631 0 12.2801 0 12.5002C0 12.7202 0.0517306 12.9372 0.151018 13.1336C2.50475 17.7261 7.16447 20.8333 12.5 20.8333C17.8355 20.8333 22.4965 17.7239 24.8489 13.1332C24.9482 12.9368 25 12.7198 25 12.4997C25 12.2797 24.9482 12.0627 24.8489 11.8663V11.8663ZM12.5 18.75C11.2638 18.75 10.0555 18.3834 9.02766 17.6966C7.99985 17.0099 7.19878 16.0338 6.72573 14.8917C6.25268 13.7497 6.12891 12.493 6.37007 11.2806C6.61123 10.0683 7.20648 8.95462 8.08056 8.08054C8.95464 7.20646 10.0683 6.61121 11.2807 6.37005C12.493 6.12889 13.7497 6.25266 14.8917 6.72571C16.0338 7.19876 17.0099 7.99984 17.6967 9.02764C18.3834 10.0555 18.75 11.2638 18.75 12.5C18.7504 13.3208 18.589 14.1337 18.275 14.8922C17.9611 15.6507 17.5007 16.3398 16.9203 16.9203C16.3398 17.5007 15.6507 17.9611 14.8922 18.275C14.1338 18.589 13.3208 18.7504 12.5 18.75V18.75ZM12.5 8.33329C12.1281 8.33849 11.7586 8.39382 11.4015 8.49779C11.6958 8.89782 11.8371 9.3901 11.7996 9.88535C11.7621 10.3806 11.5484 10.846 11.1972 11.1972C10.846 11.5484 10.3806 11.7621 9.88537 11.7996C9.39012 11.8371 8.89784 11.6958 8.49781 11.4014C8.27001 12.2407 8.31113 13.1302 8.61538 13.9448C8.91962 14.7595 9.47167 15.4582 10.1938 15.9426C10.916 16.4271 11.7719 16.6729 12.641 16.6454C13.5102 16.618 14.3489 16.3187 15.039 15.7896C15.7291 15.2605 16.236 14.5283 16.4882 13.6961C16.7404 12.8639 16.7253 11.9736 16.445 11.1504C16.1647 10.3272 15.6333 9.61265 14.9256 9.1073C14.2179 8.60195 13.3696 8.33125 12.5 8.33329V8.33329Z" fill="black"/>
                        </svg>                        
                    </span>
                    <!-- rendre invisible le mot de passe -->
                    <span class="in-visible" id="in-visible">
                        <svg width="19" height="17" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2494 16.3706C10.2865 16.3706 7.8881 14.0772 7.6674 11.171L3.56974 8.00418C3.03107 8.67996 2.53536 9.39441 2.13536 10.1757C2.04601 10.3524 1.99945 10.5477 1.99945 10.7458C1.99945 10.9438 2.04601 11.1391 2.13536 11.3159C4.25372 15.4491 8.44747 18.2456 13.2494 18.2456C14.3006 18.2456 15.3147 18.0893 16.292 17.837L14.2651 16.2686C13.9303 16.3333 13.5904 16.3674 13.2494 16.3706ZM25.508 18.6401L21.1897 15.3026C22.5014 14.1971 23.5803 12.8418 24.3635 11.3155C24.4529 11.1387 24.4994 10.9435 24.4994 10.7454C24.4994 10.5473 24.4529 10.352 24.3635 10.1753C22.2451 6.04207 18.0514 3.24559 13.2494 3.24559C11.2383 3.24802 9.25982 3.75432 7.49474 4.71824L2.52521 0.877227C2.4604 0.8268 2.3863 0.789637 2.30713 0.767861C2.22796 0.746086 2.14527 0.740125 2.06379 0.750318C1.98232 0.760512 1.90365 0.786661 1.83228 0.82727C1.76091 0.86788 1.69825 0.922154 1.64786 0.986992L0.881068 1.9741C0.779349 2.10495 0.733769 2.27085 0.754353 2.43531C0.774938 2.59976 0.86 2.74931 0.990833 2.85105L23.9736 20.6139C24.0384 20.6644 24.1126 20.7015 24.1917 20.7233C24.2709 20.7451 24.3536 20.751 24.4351 20.7409C24.5165 20.7307 24.5952 20.7045 24.6666 20.6639C24.7379 20.6233 24.8006 20.569 24.851 20.5042L25.6182 19.5171C25.7199 19.3862 25.7654 19.2202 25.7447 19.0558C25.7241 18.8913 25.6389 18.7418 25.508 18.6401ZM18.3315 13.0932L16.7963 11.9065C16.9256 11.5329 16.9942 11.1409 16.9994 10.7456C17.007 10.1668 16.8788 9.59426 16.625 9.074C16.3713 8.55374 15.999 8.10026 15.5382 7.74997C15.0773 7.39968 14.5408 7.16235 13.9716 7.05705C13.4024 6.95174 12.8164 6.9814 12.2608 7.14363C12.4963 7.46281 12.6237 7.8489 12.6244 8.24559C12.6186 8.37759 12.5984 8.50857 12.5643 8.63621L9.68888 6.41395C10.6877 5.57926 11.9478 5.12155 13.2494 5.12059C13.9882 5.12018 14.7199 5.26539 15.4025 5.54793C16.0851 5.83046 16.7054 6.24478 17.2278 6.76719C17.7502 7.28961 18.1645 7.90986 18.4471 8.59251C18.7296 9.27515 18.8748 10.0068 18.8744 10.7456C18.8744 11.5905 18.6678 12.378 18.3315 13.0936V13.0932Z" fill="black"/>
                            </svg>                        
                            
                    </span>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="" id="rememberme">
                            <label for="rememberme" class="form-check-label">Se souvenir de moi</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            {{-- <button type="submit" id="submit" class="btn btn-dark inscrire" disabled = "true">Connexion</button> --}}
                        </div>
                    </div>
                </div>
                <div class="text-center fb-button">
                    <button type="submit" class="btn btn-primary boutons"></i>{{ __('Se connecter') }}</button>
                </div>
                <!-- <br> -->
                
            </form>
            <div class="text-center g-button">
                     @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        <button class="btn btn-info boutons">  {{ __('Mot de passe oublie?') }}    </button>
                    </a>
                    @endif
                </div>
            <p class="alert alert-danger mt-1 " style="visibility: hidden;" id="errorMsg"></p>
        </div>
        </div>
        <div class="decor">
        <div class="welcome_img">
            <img src="build/assets/welcome_undraw.svg" alt="">
        </div>
    </div>
    
</x-guest-layout>
