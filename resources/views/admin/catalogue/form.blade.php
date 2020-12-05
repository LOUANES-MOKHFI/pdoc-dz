<form method="POST" action="{{ url('admin/catalogue') }}">
                        @csrf
                    <div class="row">
                         <div class="col-md-12 form-group autre">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <input type="text" name="etablissement" class="form-control-lg form-control" required value="{{old('etablissement')}}">
                             
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="structure">Structure<span style="color: red"> *</span></label>
                            <input id="structure" type="text" class="form-control form-control-lg @error('structure') is-invalid @enderror" name="structure" value="{{ old('structure') }}" required autocomplete="structure">

                                @error('structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Url de catalogue<span style="color: red"> *</span></label>
                            <input id="url" type="text" class="form-control form-control-lg @error('url') is-invalid @enderror" name="url" required autocomplete="url" value="{{ old('url') }}">

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="thematique">Thématique<span style="color: red"> *</span></label>
                            <input id="thematique" type="text" class="form-control form-control-lg @error('thematique') is-invalid @enderror" name="thematique" value="{{ old('thematique') }}" required autocomplete="thematique" autofocus>

                                @error('thematique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="thematique">Catalogue<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="nationalite_catalogue">
                                <option>--Catalogue--</option>
                                <option value="algerienne">Algerienne</option>
                                <option value="etrangere">Etrangére</option>
                            </select>

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