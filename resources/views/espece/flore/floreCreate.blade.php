<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajouter une espèce végétale</h1>
    
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
            <form action="{{ route('flore.store') }}" method="post" enctype="multipart/form-data">
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
                            <label for="hauteur_min" class="form-label">Hauteur min.</label>
                            <input  type="number" class="form-control" name="hauteur_min" id="hauteur_min">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="hauteur_max" class="form-label">Hauteur max.</label>
                            <input type="number" class="form-control" name="hauteur_max" id="hauteur_max">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input  type="text" class="form-control" name="genre" id="genre">
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
