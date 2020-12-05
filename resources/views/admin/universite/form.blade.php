<form method="POST" action="{{ url('universite') }}">
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="type_etablissement">Type d'etablissement</label>
                           <select name="type_etablissement" class="form-control form-control-lg" required>
                            <option>--Type d'etablissement--</option>
                            <option value="Université">Université</option>
                            <option value="Centres Universitaires">Centres Universitaires</option>
                            <option value="Ecoles Préparatoires">Ecoles Préparatoires</option>
                            <option value="Ecoles Normales">Ecoles Normales</option>
                            <option value="Ecoles Nationales Supérieures">Ecoles Nationales Supérieures</option>
                             <option value="autre">Auter</option>
                          </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="etablissement">Etablissement</label>
                            <input id="etablissement" type="text" class="form-control form-control-lg" name="nom_etablissement" value="{{ old('etablissement') }}" required autocomplete="etablissement">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="lien">Lien d'etablissement</label>
                            <input id="lien" type="text" class="form-control form-control-lg" name="lien" value="{{ old('lien') }}" autocomplete="lien">
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