<form method="POST" action="{{ url('administrateur') }}">
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="username">Nom et Prénom</label>
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword">Mot de pass</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword2">Confirmer votre mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                        </div>
                     </div>
                      <div class="row">
                         <div class="col-md-6 form-group b">
                          <label for="type_etablissement">type d'etablissement<span style="color: red"> *</span></label>
                             <select name="type_etablissement" class="form-control form-control-lg" required id="type_etablissement">
                            <option>--Type d'tablissement--</option>
                            @foreach(type_etablissement() as $type_etablissement)
                            <option value="{{$type_etablissement->type_etablissement}}">{{$type_etablissement->type_etablissement}}</option>
                            @endforeach
                          </select>
                        </div>

                         <div class="col-md-6 form-group b">
                            <label for="universite">Etablissment<span style="color: red"> *</span></label>
                          
                             <select name="universite" class="form-control form-control-lg @error('universite') is-invalid @enderror" required id="etablissement">
                             <option>--Votre Etablissement--</option>
                             
                          </select>

                        </div>
                       
                      </div> 
                      <input type="hidden" name="admin" value="1">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Inscrivez-vous') }}
                                </button>
                        </div>
                    </div>
            </form>