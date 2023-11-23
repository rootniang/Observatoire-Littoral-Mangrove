<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Utilisation de l'API</h1>
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
        <h2>Bienvenu(e) dans la partie API de l'application.</h2>
        <div id="infos" data-mail="{{ $email }}" data-password="{{ $password }}" style="display: none"></div>
        <?php
          $bool = false ;
          $cle = '';
          foreach ($acces_token as $token) {
            if($token->tokenable_id == $id){
              $bool = true ;
              $cle = $token->token;
            }
          }
        ?>
        @if ($bool == false)
        <p>Pour commencer à utiliser l'api veuillez générer une clé d'utilisation</p>
        <button type="button" id="generatebutton" class="btn btn-success">Générer une clé</button>
        @else
        <p>Votre clé d'api est: </p>
        <div id="cleapibis">
          <p>{{$cle}}</p>
          <div class="alert alert-info" role="alert">
            Prenez bien le soin de copier et de bien garder votre clé.
            Cette clé est confidentielle et ne doit être partagée sous aucun pretexte.
          </div>
        </div>
        @endif
        <div id="cleapi">
          <div class="alert alert-info" role="alert">
            Prenez bien le soin de copier et de bien garder votre clé.
            Cette clé est confidentielle et ne doit être partagée sous aucun pretexte.
          </div>
        </div>
    </div>
</x-app-layout>
<script>
  let displaycle = document.getElementById("cleapi") ;
  let generatebutton = document.getElementById("generatebutton") ;
  const url = 'http://127.0.0.1:8000/api/login' ;
  let infos = document.getElementById("infos");
  let mail = infos.getAttribute('data-mail');
  let pass = infos.getAttribute('data-password');
  let data = {
    email: mail,
    password: pass
  }
// Exemple d'implémentation pour une requête POST
async function postData(url = "", donnees = {}) {
  // Les options par défaut sont indiquées par *
  const response = await fetch(url, {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
    credentials: "same-origin", // include, *same-origin, omit
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), Accept: "application/json", "Content-Type": "application/json" },
    redirect: "follow", // manual, *follow, error
    referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(donnees), // le type utilisé pour le corps doit correspondre à l'en-tête "Content-Type"
  });
  return response.json(); // transforme la réponse JSON reçue en objet JavaScript natif
}
  generatebutton.addEventListener("click", () => {
  
    postData(url, data).then((donnees) => {
    console.log(donnees.token); // Les données JSON analysées par l'appel `donnees.json()`
    let newP = document.createElement('p');
    newP.textContent = donnees.token ;
    displaycle.prepend(newP);
    displaycle.style.display = "block" ;
  });
    
})
</script>