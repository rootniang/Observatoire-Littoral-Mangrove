<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Liste des espèces</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a href="{{ route('espece.create') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button></a>
          <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar" class="align-text-bottom"></span>
          Cette semaine
        </button>
      </div>
    </div>
    <div>
      <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">Date d'ajout</th>
                    <th scope="col">Dernière modification</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($especes as $espece)
                <tr>
                    <td>{{ $espece->id }}</td>
                    <td>{{ $espece->nom }}</td>
                    <td>{{ $espece->created_at }}</td>
                    <td>{{ $espece->updated_at }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('espece.edit', $espece) }}">
                                <button type="button" class="btn btn-warning">Modifier</button></a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $espece->id }}" class="btn btn-danger"></i>Supprimer</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $espece->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Voulez-vous vraiment supprimer cet espèce?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <form action="{{ route('espece.destroy',$espece) }}" method="post" id="destroy-post-form">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"></i>Supprimer</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </td>
                </tr>
                @empty
            </tbody>
        </table>
        <span class="emptytable">Pas d'espèces dans la base</span>
        @endforelse
        {{ $especes->links() }}
    </div>
</x-app-layout>
