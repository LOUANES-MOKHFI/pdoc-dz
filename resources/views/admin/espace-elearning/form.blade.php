 <form method="POST" action="{{ url('/admin/modules') }}">
                        @csrf
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_module">Nom de module<span style="color: red"> *</span></label>
                            <input id="nom_module" type="text" class="form-control form-control-lg @error('nom_module') is-invalid @enderror" name="nom_module" value="{{ old('nom_module') }}" required autocomplete="nom_module">
                                @error('nom_module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Faculte<span style="color: red"> *</span></label>
                            <input id="faculte" type="text" class="form-control form-control-lg @error('faculte') is-invalid @enderror" name="faculte" required autocomplete="faculte" value="{{ old('faculte') }}">

                                @error('faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="domaine">Domaine<span style="color: red"> *</span></label>
                            <input id="domaine" type="text" class="form-control form-control-lg @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="specialite">Spécialite<span style="color: red"> *</span></label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="niveaux">Niveaux<span style="color: red"> *</span></label>
                            <select class="form-control-lg form-control" name="niveaux" required="">
                              <option value="">--Niveaux--</option>
                              <option value="1er année Licence">1er année Licence</option>
                              <option value="2eme année Licence">2eme année Licence</option>
                              <option value="3eme année Licence">3eme année Licence</option>
                              <option value="1er année Master">1er année Master</option>
                              <option value="2eme année Master">2eme année Master</option>

                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                            <select name="id_etablissement" class="form-control form-control-lg" required>
                                <option value="">--Etablissement--</option>
                                 @foreach(all_etablissement() as $universite)
                                   <option value="{{$universite->id}}">{{$universite->nom_etablissement}}</option>
                                 @endforeach
                            </select>
                           
                          
                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-lg px-5">
                                    {{ __('Valider') }}
                                </button>
                        </div>
                    </div>
            </form>