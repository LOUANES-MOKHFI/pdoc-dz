<form method="POST" action="{{url('admin/ressource/ressourcePE') }}" enctype='multipart/form-data'>
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom_ressource">Nom de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="nom_ressource" value="{{ old('nom_ressource') }}" required autocomplete="nom_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="organisme_producteur">Organisme producteur</label>
                           <input id="name" type="text" class="form-control form-control-lg" name="organisme_producteur" value="{{ old('organisme_producteur') }}" required autocomplete="organisme_producteur" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url_ressource">URL de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="url_ressource" value="{{ old('url_ressource') }}" required autocomplete="url_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Type d'accès</label> 
                            <select name="type_acces" class="form-control form-control-lg" required>
                                <option value="">--Type d'accés</option>
                                <option value="accès reserve">Accès Reservé</option>
                                <option value="accès ouvert">Accès Ouvert</option>
                            </select>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="du">Accès Du </label>
                            <input id="name" type="text" class="form-control form-control-lg" name="du" value="{{ old('du') }}" required autocomplete="du" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="au">Au</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="au" value="{{ old('au') }}" required autocomplete="au" autofocus>
                        </div>
                          <div class="col-md-6 form-group">
                            <label>Type de la ressource</label>
                            <select name="type_ressource" class="form-control form-control-lg" required="">
                                <option value="">--type de ressource--</option>
                                    <option value="Actes de conférences">Actes de conférences</option>
                                    <option value="Apprentissage de langues">Apprentissage de langues</option>
                                    <option value="Bases de données">Bases de données</option>
                                    <option value="Bibliographies">Bibliographies</option>
                                    <option value="Collections numérisée">Collections numérisée</option>
                                    <option value="Corpus de textes">Corpus de textes</option>
                                    <option value="Dictionnaires">Dictionnaires</option>
                                    <option value="Encyclopédies">Encyclopédies</option>
                                    <option value="Livres numériques">Livres numériques</option>
                                    <option value="Musique en ligne">Musique en ligne</option>
                                    <option value="Presse">Presse</option>
                                    <option value="Revues">Revues</option>
                                    <option value="Thèses">Thèses</option>
                            </select>
                        </div>
                           <div class="col-md-6 form-group">
                            <label>Discipline</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="descipline" value="{{ old('descipline') }}" autocomplete="descipline" autofocus>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="couverture_chronologique">Couverture chronologique</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="couverture_chronologique" value="{{ old('couverture_chronologique') }}" autocomplete="couverture_chronologique" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                            <select class="form-control form-control-lg" name="langue" required="">
                                <option value="">--Langue--</option>
                                <option value="ARABE">ARABE</option>
                                <option value="FRANÇAIS">FRANÇAIS</option>
                                <option value="ANGLAIS">ANGLAIS</option>
                                <option value="ESPAGNOLE">ESPAGNOLE</option>
                                <option value="ITALIEN">ITALIEN</option>
                                <option value="TRILINGUE">TRILINGUE</option>
                                <option value="MULTILINGUE">MULTILINGUE</option>
                            </select>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description"></textarea> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" class="form-control-lg form-control"> 
                        </div>
                         <div class="col-md-6 form-group">
                            <input type="hidden" name="categorie_ressource" class="form-control-lg form-control" value="reesource en periode d'essai"> 
                        </div>
                     </div> 
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Ajouter') }}
                                </button>
                        </div>
                    </div>
            </form>