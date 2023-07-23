<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajouter un utilisateur</h1>
    
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
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input  type="text" class="form-control" name="email" id="email" placeholder="adresse@email.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input  type="text" class="form-control" name="adresse" id="adresse" placeholder="Dakar plateau Rue 19 ...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="numeroTelephone" class="form-label">Numéro de Téléphone</label>
                            <input type="text" class="form-control" name="numeroTelephone" id="numeroTelephone" placeholder="+221 77 345 27 66">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="typeuser" class="form-label">Type d'utilisateur</label>
                            <select class="form-select" aria-label="Default select example" name="typeuser" id="typeuser">
                                <option value="..." selected>Choisir</option>
                                <option value="pers">Personne</option>
                                <option value="pro">Representant Organisation</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="usernormal">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input  type="text" class="form-control" name="prenom" id="prenom" placeholder="Moussa ...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Ba ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="dateDeNaissance" class="form-label">Date de naissance</label>
                                <input  type="date" class="form-control" name="dateDeNaissance" id="dateDeNaissance">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="Default select example" name="role">
                                    <option value="..." selected>Choisir</option>
                                    <option value="admin">Admin</option>
                                    <option value="pro">Professionnel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="userorg">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="sigle" class="form-label">Sigle</label>
                                <input  type="text" class="form-control" name="sigle" id="sigle" placeholder="UNICEF">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="libelle" class="form-label">Libellé</label>
                                <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Nations Unies">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input  type="text" class="form-control" name="description" id="description">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="..." selected>Choisir</option>
                                    <option value="og">Organisme Gouvernemental</option>
                                    <option value="ong">ONG</option>
                                </select>
                            </div>
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
