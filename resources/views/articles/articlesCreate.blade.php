<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ajouter un article</h1>
    
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
            <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input  type="text" class="form-control" name="titre" id="titre">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="banniere" class="form-label">Banniere</label>
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
                            <label for="exampleFormControlTextarea1" class="form-label">Contenu</label>
                            <textarea class="form-control" name="contenu" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div id="zoneressource">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="assets" class="form-label">Type ressource</label>
                                <select name="typeasset[]" class="form-select" id="asset">
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
                                <label for="assets" class="form-label">Ressource</label>
                                <input type="file" class="form-control" name="assets[]" id="assets">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="form-control btn btn-success" type="button" id="addressource">Ajoutrer une ressource</button>
                </div>
                <div class="mb-3">
                    <button type="submit" class="form-control btn btn-dark">Enregister</button>
                </div>

            </form>
        </div>
        </div>
    </div>
</x-app-layout>
<script>
    let btnadd = document.getElementById("addressource") ;
    let zoneressource = document.getElementById("zoneressource") ;
    let ress = `<div class="row">\n
                        <div class="col">\n
                            <div class="mb-3">\n
                                <label for="assets" class="form-label">Type ressource</label>\n
                                <select name="typeasset[]" class="form-select" id="asset">\n
                                    <option value="">Choisir ...</option>\n
                                    <option value="image">Image</option>\n
                                    <option value="video">Video</option>\n
                                    <option value="pdf">PDF</option>\n
                                    <option value="docx">Docx</option>\n
                                </select>\n
                            </div>\n
                        </div>\n
                        <div class="col">\n
                            <div class="mb-3">\n
                                <label for="assets" class="form-label">Ressource</label>\n
                                <input type="file" class="form-control" name="assets[]" id="assets">\n
                            </div>\n
                        </div>\n
                    </div>` ;
    btnadd.onclick = () => {
        zoneressource.insertAdjacentHTML('beforeend', ress);
    }
</script>