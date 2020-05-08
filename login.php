<?php include("header.php") ?>
<?php include("nav.php") ?>

<style>
    #nav__link--entrar
    {
        box-shadow: 0 5px 0 var(--cor-primaria);
    }
</style>

<main>
<section class = "interna">
    <h1 class = "section__titulo sombreado--left">Entrar</h1>

    <form action = "#" method = "post" class = "login__form">
        <div class = "form__container">
            <div class = "form__amarrador">
                <label for = "nome">Endereço de email</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>

            <div class = "form__amarrador">
                <label for = "nome">Senha</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
        </div>
        <button class = "button button--normal" type = "submit">Entrar</button>
    </form>
</section>
</main>

<?php include("footer.php") ?>
