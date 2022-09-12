<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Fonte do Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/scripts.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="/logout" method="POST">
              <?php echo csrf_field(); ?>
              <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();">
                Sair
              </a>
            </form>
          </li>
          <?php if(auth()->guard()->guest()): ?>
          <li class="nav-item">
            <a href="/login" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link">Cadastrar</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        <?php if(session('msg')): ?>
        <p class="msg"><?php echo e(session('msg')); ?></p>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
  </main>
  <footer>

  </footer>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html><?php /**PATH /home/icaro/Área de Trabalho/developer/ProjetoEntra21-22-PHP/balcao-brasil/resources/views/layouts/main.blade.php ENDPATH**/ ?>