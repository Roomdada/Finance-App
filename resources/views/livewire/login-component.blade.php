<div>
    <form id="loginForm" method="post" action="{{ route('login') }}">
    	@csrf
        <div class="form-group">
          <label for="email">Adresse e-mail <span>*</span></label>
          <input name="email" type="email" class="form-control" id="email" required placeholder="Entrer votre email">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe <span>*</span></label>
          <input name="password" type="password" class="form-control" id="password" required placeholder="Entrer votre mot de passe">
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="form-check custom-control custom-checkbox">
              <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
              <label class="custom-control-label" for="remember-me">Se souvenir de moi</label>
            </div>
          </div>
          <div class="col-sm text-right"><a class="btn-link" href="#">Mot de passe oublié ?</a></div>
        </div>
        <button class="btn btn-primary btn-block my-4" type="submit">S'identifier</button>
      </form>
</div>
