<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajouter une espèce animale</h1>
    
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
            <form action="{{ route('faune.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input  type="text" class="form-control" name="nom" id="nom">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nom_scientifique" class="form-label">Nom Scientifique</label>
                            <input type="text" class="form-control" name="nom_scientifique" id="nom_scientifique">
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="famille" class="form-label">Famille</label>
                            <input  type="text" class="form-control" name="famille" id="famille">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="longevite" class="form-label">Longévité</label>
                            <input type="text" class="form-control" name="longevite" id="longevite">
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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="banniere" class="form-label">Image</label>
                            <input type="file" class="form-control" name="banniere" onchange="previewPicture(this)" id="banniere">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <img src="#" alt="" id="image" style="max-width: 500px; margin-top: 20px;" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="poid_min" class="form-label">Poids min.</label>
                            <input  type="number" step="0.01" class="form-control" name="poid_min" id="poid_min">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="poid_max" class="form-label">Poids max.</label>
                            <input type="number" step="0.01" class="form-control" name="poid_max" id="poid_max">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="taille_min" class="form-label">Taille min.</label>
                            <input  type="number" step="0.01" class="form-control" name="taille_min" id="taille_min">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="taille_max" class="form-label">Taille max.</label>
                            <input type="number" step="0.01" class="form-control" name="taille_max" id="taille_max">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="type_reproduction" class="form-label">Type de reproduction</label>
                            <input  type="text" class="form-control" name="type_reproduction" id="type_reproduction">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="type_regime" class="form-label">Type de regime</label>
                            <input type="text" class="form-control" name="type_regime" id="type_regime">
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
