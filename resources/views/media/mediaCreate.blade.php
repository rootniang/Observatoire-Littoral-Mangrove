<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajouter une ressource</h1>
    
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
            <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input  type="text" class="form-control" name="titre" id="titre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="media" class="form-label">Type ressource</label>
                            <select name="type" class="form-select" id="media">
                                <option value="">Choisir ...</option>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                                <option value="pdf">PDF</option>
                                <option value="docx">Docx</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="chemin" class="form-label">ressource</label>
                            <input type="file" class="form-control" name="chemin" id="assets">
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
