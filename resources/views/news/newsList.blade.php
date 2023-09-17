<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Liste des actualités</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a href="{{ route('new.create') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Ajouter</button></a>
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
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Banniere</th>
                    <th scope="col">Date de publication</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $new)
                <tr>
                    <td>{{ $new->titre }}</td>
                    <td>{{ $new->description }}</td>
                    <td><img src="storage/{{ $new->banniere }}" alt="banniere"  style="width: 100px; height: auto;"></td>
                    <td>{{ $new->created_at }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('new.edit', $new) }}">
                                <button type="button" class="btn btn-warning">Modifier</button></a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $new->id }}" class="btn btn-danger"></i>Supprimer</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $new->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Voulez-vous vraiment supprimer cet actualité?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                <form action="{{ route('new.destroy',$new) }}" method="post" id="destroy-post-form">
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
        <span class="emptytable">Pas d'actualités dans la base</span>
        @endforelse
        {{ $news->links() }}
    </div>
</x-app-layout>
