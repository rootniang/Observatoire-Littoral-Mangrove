<x-app-layout>
    <div class="sectioncenter">
        <x-slot name="header">
            <h2>
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div class="form-content col-lg-6">
            <div>
                <div>
                    <div>
                        @include('profile.partials.update-profile-information-form')
                    </div> 
                </div>

                <div>
                    <div>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div>
                    <div>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
