<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier un utilisateur</h1>
    
    </div>
    <div class="sectioncenter">
        <div class="form-content col-lg-6">
             <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input  type="text" class="form-control" name="prenom" value="{{ $user->prenom }}" id="prenom">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input  required type="text" class="form-control" name="nom" value="{{ $user->nom }}" id="nom">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="date_de_naissance" class="form-label">Date de naissance</label>
                            <input  type="date" class="form-control" name="date_de_naissance" value="{{ $user->date_de_naissance }}" id="date_de_naissance">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="user" selected>user</option>
                                <option value="Employe">Employe</option>
                                <option value="Technicien">Technicien</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input  type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmation mot de passe</label>
                            <input  type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        </div>
                    </div>
                    
                </div>
                <div class="mb-3">
                    <button type="submit" class="form-control btn btn-dark">Enregister</button>
                </div>

            </form>
        </div>
        </div>
    </div>
</x-app-layout>
