@extends('formulaire.master')

@section('contenu')
        <!-- debut du card -->
<div class="card">
    <!-- titre du card -->
    <h5 class="card-header">
        <strong>Nouvelle école</strong>
    </h5>

    <!--contenu du card -->
    <div class="card-body">

        <!-- debut formulaire -->
        <form class="text-center">

            <div class="md-form mt-3">
                <input type="text" id="nom_ecole" name="nom_ecole" class="form-control">
                <label for="nom_ecole">Designation</label>
            </div>

            <!-- bouton de connexion -->
            <input class="btn" type="submit" value="Ajouter"/>

        </form>
        <!-- fin du formulaire -->

    </div>
    <!--contenu du card -->
</div>
<!-- fin du card -->
@endsection
