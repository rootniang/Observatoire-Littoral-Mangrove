<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modifier une espèce</h1>
    
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
            <form action="{{ route('espece.update', $espece) }}" enctype="multipart/form-data" method="post">
                @method('put')    
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom de l'espèce</label>
                            <input  type="text" class="form-control" name="nom" value="{{ $espece->nom }}" id="nom">
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
