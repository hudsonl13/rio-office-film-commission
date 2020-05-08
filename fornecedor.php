<?php include("header.php") ?>
<?php include("nav.php") ?>

<style>
    #nav__link--inscricoes
    {
        box-shadow: 0 5px 0 var(--cor-primaria);
    }
</style>

<main>
<section class = "interna__cadastro--fornecedor">
    <h1 class = "section__titulo sombreado--left">Inscrição de Fornecedor</h1>

    <form action = "#" method = "post" class = "fornecedor__form">
        <div class = "form__container">
            <div class = "form__amarrador">
                <label for = "nome">Nome completo</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">CPF (ou CNPJ)</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">Endereço de email</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">Telefone</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">Endereço</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">Bairro</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "nome">Cidade</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "estado">Estado</label>
                <select id = "estado" required>
                    <option>Rio de Janeiro</option>
                    <option>São Paulo</option>
                </select>
            </div>
        </div>

        <div class = "form__container">
            <div class = "form__amarrador">
                <label for = "segmento">Segmento</label>
                <select id = "segmento">
                    <option>Produção</option>
                    <option>Figuração</option>
                    <option>Transporte</option>
                    <option>Iluminação</option>
                    <option>Atuação</option>
                    <option>Saúde</option>
                    <option>Outra</option>
                </select>
            </div>

            <div class = "form__amarrador">
                <label for = "">Cidade de atuação</label>
                <input id = "nome" type = "text" name = "nome" required>
            </div>
            <div class = "form__amarrador">
                <label for = "">Cidade de atuação</label>
                <input id = "nome" type = "text" name = "nome">
            </div>
            <div class = "form__amarrador">
                <label for = "">Cidade de atuação</label>
                <input id = "nome" type = "text" name = "nome">
            </div>
            <div class = "form__amarrador">
                <label for = "">Cidade de atuação</label>
                <input id = "nome" type = "text" name = "nome">
            </div>
        </div>

        <button class = "button button--normal" type = "submit">Enviar</button>
    </form>
</section>
</main>

<?php include("footer.php") ?>
