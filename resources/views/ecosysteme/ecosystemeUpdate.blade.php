<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier une écosystème</h1>
    
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
            <form action="{{ route('ecosysteme.update', $ecosysteme) }}" enctype="multipart/form-data" method="post">
                @method('put')    
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="libelle" class="form-label">Libelle</label>
                            <input  type="text" class="form-control" name="libelle" value="{{ $ecosysteme->libelle }}" id="libelle">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="localisation" class="form-label">Localisation</label>
                            <input type="text" class="form-control"  value="{{ $ecosysteme->localisation }}" name="localisation" id="localisation">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="typesol" class="form-label">Type sol</label>
                            <select class="form-control" name="typesol" id="typesol">
                                <option value="">Choisir...</option>
                                <option value="sableux">Sableux</option>
                                <option value="rocheux">Rocheux</option>
                                <option value="caillouteux">Caillouteux</option>
                                <option value="vaseux">Vaseux</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Liste des espèces</label>
                            <select class="form-select" multiple name="noms[]" id="nom">
                                <option value="">Choisir...</option>
                                @foreach ($especes as $espece)
                                    <option value="{{ $espece->id }}">{{ $espece->nom }}</option>
                                @endforeach
                            </select>
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
