<div class="site-section a">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-cenetr">Etes-vous un enseignant?</h3>
<form method="POST" action="{{ url('register') }}">
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
                        <div class="col-md-6 form-group">
                            <input type="radio" name="genre" id="check1" value="enseignant">
                            <label>Enseignant</label>
                             <input type="radio" name="genre" id="check2" value="etudiant">
                            <label>Etudiant</label>
                        </div>
                     </div>
                      <div class="row a" id="enseignant">
                         <div class="col-md-6 form-group">
                            <label for="universite">Universite</label>
                            <input id="universite" type="text" class="form-control form-control-lg @error('universite') is-invalid @enderror" name="universite" value="{{ old('universite') }}"  autocomplete="universite" autofocus>

                                @error('universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="specialite">Specialite</label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 form-group">
                           <label for="grade">Grade</label>
                           <input id="grade" type="text" class="form-control form-control-lg @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}" autocomplete="grade" autofocus>

                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                                 <div class="row a" id="etudiant" >
                         <div class="col-md-6 form-group">
                            <label for="universite">Universite</label>
                            <input id="universite" type="text" class="form-control form-control-lg @error('universite') is-invalid @enderror" name="universite" value="{{ old('universite') }}" autocomplete="universite" autofocus>

                                @error('universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="faculte">Faculte</label>
                            <input id="faculte" type="text" class="form-control form-control-lg @error('faculte') is-invalid @enderror" name="faculte" value="{{ old('faculte') }}"  autocomplete="faculte" autofocus>

                                @error('faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="domaine">Domaine</label>
                            <input id="domaine" type="text" class="form-control form-control-lg @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}"  autocomplete="domaine" autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="specialite">Specialite</label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}"  autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 form-group">
                           <label for="matricule">Matricule</label>
                           <input id="matricule" type="text" class="form-control form-control-lg @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule') }}" autocomplete="matricule" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Inscrivez-vous') }}
                                </button>
                        </div>
                    </div>
            </form>
        </div>          
    </div>
</div>