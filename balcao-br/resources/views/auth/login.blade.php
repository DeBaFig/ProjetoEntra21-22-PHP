<link rel="stylesheet" href="assets/login/css/app.css">
<!-- Session Status -->
<x-auth-session-status :status="session('status')" />

<!-- Validation Errors -->
<div class="error">
    <x-auth-validation-errors errors :errors="$errors" />
</div>

<div class="center">

    <h1>Entrar</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-fild">
            <input for="email" :value="__('Email')" id="email" name="email" autofocus />

            <span></span>
            <label>email</label>
        </div>
        <div class="text-fild">
            <input type="password" name="password" id="password" autocomplete="current-password" />
            <span></span>
            <label>Senha</label>
        </div>
        <div class="pass">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

        </div>
        <input class="btn" type="submit" value={{ __('Entrar') }}>
        <div class="signup_link">
            Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se!</a>
        </div>
</div>
</div>
</form>
<div class="center-2">
    <h2>Balcão Brasil</h2>
    <img src="assets/login/img/lazy 1.png" alt="imagem de uma pessoa com a perna em cima de uma meza" />

</div>
