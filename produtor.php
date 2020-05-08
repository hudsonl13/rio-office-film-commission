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
    <h1 class = "section__titulo sombreado--left">Inscrição de Produtor</h1>

    <form action = "#" method = "post" class = "fornecedor__form">
        <div class = "form__container">
            <div class = "form__amarrador">
                <label>Nome completo</label>
                <input type = "text" name = "nome" required>
            </div>

            <div class = "form__amarrador flex background">
                <div class = "flex">
                    <input id = "pessoa-fisica" type = "radio" name = "tipo-pessoa" checked value = "pessoa-fisica">
                    <label for = "pessoa-fisica">Pessoa Física</label>
                </div>

                <div class = "flex">
                    <input id = "pessoa-juridica" type = "radio" name = "tipo-pessoa" value = "pessoa-juridica">
                    <label for = "pessoa-juridica">Pessoa Jurídica</label>
                </div>
            </div>

            <div class = "form__amarrador">
                <label>CPF do responsável pela produção</label>
                <input type = "text" name = "cpf" required>
            </div>

            <div class = "form__amarrador">
                <label>Endereço de email</label>
                <input type = "email" name = "endereco-email" required>
            </div>

            <div class = "form__amarrador">
                <label>Telefone</label>
                <input type = "text" name = "telefone" required>
            </div>

            <!-- Esclarecer conteúdo -->
            <div class = "form__amarrador">
                <label>Endereço completo</label>
                <input type = "text" name = "endereco" required placeholder = "Avenida Presidente Vargas, 1261 - Centro, Rio de Janeiro, RJ - 20071-004">
            </div>

            <div class = "form__amarrador">
                <label>Estado e país de origem</label>
                <input type = "text" name = "estado-pais" required placeholder = "Rio de Janeiro, Brasil">
            </div>

            <div class = "background">
                <div class = "form__amarrador">
                    <label>Imagem do RG</label>
                    <input type = "file" name = "imagem-rg" required>
                </div>
            </div>

            <div class = "background">
                <div class = "form__amarrador">
                    <label>Imagem do CPF</label>
                    <input type = "file" name = "imagem-cpf" required>
                </div>
            </div>

            <div class = "background">
                <div class = "form__amarrador">
                    <label>Declaração de legitimidade</label>
                    <input type = "file" name = "declaracao" required>
                </div>

                <a href = "https://drive.google.com/open?id=1oPBf7xlXp9A-WXNCUhsPLv3cyWDPjnSy" target = "_blank" class = "button button--normal" download>Acessar modelo</a>
            </div>
        </div>
        <button class = "button button--normal" type = "submit">Enviar</button>
    </form>
</section>
</main>

<?php include("footer.php") ?>
