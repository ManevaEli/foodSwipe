<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FoodSwipe — Connexion</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="auth-page">
  <div class="auth-card">

    <div class="auth-logo">
      <span class="logo-icon">🍽️</span>
      <h1>FoodSwipe</h1>
      <p>Swipez. Savourez. Régalez-vous.</p>
    </div>

    <form action="<?= base_url('/loginPost') ?>" method="post">
      <?= csrf_field() ?>
      
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" id="login-email" placeholder="vous@exemple.com" required />
      </div>
      
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" name="password" id="login-pwd" placeholder="••••••••" required />
      </div>
      
      <?php if (session()->getFlashdata('error')): ?>
        <p class="form-error" id="login-error"><?= session()->getFlashdata('error') ?></p>
      <?php endif; ?>
      
      <button type="submit" class="btn-primary">Se connecter 🍴</button>
    </form>

    <div class="auth-switch">
      Pas encore de compte ? <a href="<?= base_url('register') ?>">S'inscrire</a>
    </div>

  </div>
</div>

</body>
</html>