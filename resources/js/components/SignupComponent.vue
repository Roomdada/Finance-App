<template>
    <div class="container">
         <form id="loginForm" method="post">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="firstname">Nom <span>*</span></label>
                      <input type="text" class="form-control" id="firstname" required placeholder="Entrer votre nom">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="lastname">Prénom <span>*</span></label>
                      <input type="text" class="form-control" id="lastname" required placeholder="Entrer votre Prénom">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email <span>*</span></label>
                      <input type="text" class="form-control" id="email" required placeholder="Entrer votre email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Numéro de téléphone <span>*</span></label>
                      <input type="text" class="form-control" id="phone" required placeholder="Entrez votre numéro de téléphone">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="contry">Pays <span>*</span></label>
                      <input type="text" class="form-control" id="contry" required placeholder="Entrer votre pays">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sexe">Sexe <span>*</span></label>
                      <select name="sexe" class="form-control" id="sexe" required>
                        <option value="H">Homme</option>
                        <option value="f">Femme</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="parrain">Code du parrain</label>
                      <input type="text" class="form-control" id="parrain" required placeholder="Entrer le code de votre parrain (facultatif)">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Mot de passe <span>*</span></label>
                      <input type="password" class="form-control" id="password" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password-confirm">Confirmation du Mot de passe <span>*</span></label>
                      <input type="password" class="form-control" id="password-confirm" required>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-block my-4" type="submit">S'inscrire</button>
              </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
