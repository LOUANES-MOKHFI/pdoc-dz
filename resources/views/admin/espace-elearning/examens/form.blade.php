 <form method="POST" action="{{ url('/admin/examens') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_examen">Nom d'examen<span style="color: red"> *</span></label>
                            <input id="nom_examen" type="text" class="form-control form-control-lg @error('nom_examen') is-invalid @enderror" name="nom_examen" value="{{ old('nom_examen') }}" required autocomplete="nom_examen">
                                @error('nom_examen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="universite">Année<span style="color: red"> *</span></label>
                           <input type="text" name="annee" class="form-control form-control-lg" value="{{old('annee')}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="cours">Examens<span style="color: red"> *</span></label>
                              <input type="file" name="fichier" class="form-control form-control-lg" required>
                        </div>
                            <input type="hidden" name="id_module" value="{{$module->id}}">
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-lg px-5">
                                    {{ __('Valider') }}
                                </button>
                        </div>
                    </div>
            </form>