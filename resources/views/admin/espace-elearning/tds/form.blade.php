 <form method="POST" action="{{ url('/admin/tds') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_tds">Nom de Td<span style="color: red"> *</span></label>
                            <input id="nom_tds" type="text" class="form-control form-control-lg @error('nom_tds') is-invalid @enderror" name="nom_tds" value="{{ old('nom_tds') }}" required autocomplete="nom_tds">
                                @error('nom_tds')
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
                            <label for="tds">Td<span style="color: red"> *</span></label>
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