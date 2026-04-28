<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FoodSwipe — Inscription</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="auth-page">
  <div class="auth-card">

    <div class="auth-logo">
      <span class="logo-icon">🥘</span>
      <h1>Créer un compte</h1>
      <p>Rejoignez la communauté des gourmands</p>
    </div>
    <<form action="<?= base_url('/insertUser') ?>" method="post">

  <div class="form-group">
  <label>Prénom & Nom</label>
  <input type="text" id="reg-name" name="nom" placeholder="Jean Dupont" autocomplete="name" />
</div>

<div class="form-group">
  <label>Email</label>
  <input type="email" id="reg-email" name="email" placeholder="vous@exemple.com" autocomplete="email" />
</div>

<div class="form-group">
  <label>Mot de passe</label>
  <input type="password" id="reg-pwd" name="mdp" placeholder="8 caractères minimum" autocomplete="new-password" />
</div>

<div class="form-group">
  <label>Confirmer le mot de passe</label>
  <input type="password" id="reg-pwd2" name="mdp2" placeholder="••••••••" autocomplete="new-password" />
</div>

    <p class="form-error" id="reg-error"></p>

    <button type="submit">Creer Mon Compte</button>
    </form>


    <div class="auth-switch">
      Déjà un compte ? <a href="<?= base_url('login')?>">Se connecter</a>
    </div>

  </div>
</div>

</body>
</html>
