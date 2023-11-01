<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier une actualité</h1>
    
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
            <form action="{{ route('new.update', $new) }}" enctype="multipart/form-data" method="post">
                @method('put')    
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input  type="text" class="form-control" name="titre" value="{{ $new->titre }}" id="titre">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control"  value="{{ $new->description }}" name="description" id="description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="banniere" class="form-label">Banniere</label>
                            <input type="file" class="form-control" name="banniere" onchange="previewPicture(this)" id="banniere">
                            <input type="text" class="form-control"  value="{{ $new->banniere }}" name="hiddenbanniere" hidden>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <img src="{{asset('storage/')}}/{{ $new->banniere }}" alt="" id="image" style="max-width: 500px; margin-top: 20px;" >
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
