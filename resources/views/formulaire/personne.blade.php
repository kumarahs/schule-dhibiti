@extends('formulaire.master')

@section('contenu')
        <!-- debut du card -->
    <div class="card">
        <!-- titre du card -->
        <h5 class="card-header">
            <strong>Nouvelle personne</strong>
        </h5>

        <!--contenu du card -->
        <div class="card-body">

            <!-- debut formulaire -->
            <form class="text-center">

                <!-- Nom d'utilisateur -->
                <div class="row">
                    <div class="col-md md-form mt-3">
                        <input type="text" id="nom" name="nom" class="form-control">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="col-md md-form mt-3">
                        <input type="text" id="postnom" name="postnom" class="form-control">
                        <label for="postnom">Postnom</label>
                    </div>
                    <div class="col-md md-form mt-3">
                        <input type="text" id="Prenom" name="Prenom" class="form-control">
                        <label for="prenom">Prénom</label>
                    </div>
                </div>
                <div class="row ml-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="homme" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="homme">Homme</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="femme" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="femme">Femme</label>
                    </div>
                </div>
                <div class="md-form mt-3">
                    <input type="text" id="adresse" name="adresse" class="form-control">
                    <label for="adresse">adresse</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" id="telephone" name="telephone" class="form-control">
                    <label for="telephone">Téléphone</label>
                </div>
                <div class="md-form mt-3">
                    <input type="text" id="lieunaissance" name="lieunaissance" class="form-control">
                    <label for="lieunaissance">Lieu de naissance</label>
                </div>
                <div class="md-form mt-3">
                    <input type="date" id="datenaissance" name="datenaissance" class="form-control" placeholder="la date">
                    <label for="datenaissance"></label>
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
