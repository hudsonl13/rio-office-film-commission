<?php include("header.php") ?>

<main>
<section id = "hero">
    <div class = "container hero__container">
        <video class = "hero__video" src = "docs/Film-set.mp4" muted poster playsinline autoplay loop oncontextmenu = "return false;"></video>
        <div class = "hero__amarrador">
            <h1 class = "hero__titulo sombreado--right">Rio Office <br>Film Commission</h1>
            <p class = "hero__descricao">
                Apoio à produção de conteúdo audiovisual nacional e internacional.
            </p>

            <div class = "hero__amarrador__amarrador">
                <a href = "sobre.php" class = "button button--ghost">Saiba mais</a>
                <a href = "fornecedor.php" class = "button hero__cta button--normal selecionavel">Inscreva-se!</a>
            </div>
        </div>
</section>

<?php include("nav.php") ?>

<section class = "proposta">
    <div class = "container">
        <div class = "proposta__amarrador">
            <div class = "proposta__logo"></div>
            <p class = "proposta__descricao">
                Somos o escritório oficial para apoio à produção de conteúdo audiovisual nacional e internacional no estado do Rio de Janeiro. <br>Facilitamos a logística de gravações e divulgamos o estado como cenário para filmagens, fortalecendo a indústria do audiovisual por meio da Secretaria de Estado de Cultura e Economia Criativa do Rio de Janeiro.
            </p>

            <a href = "sobre.php" class = "button proposta__button button--ghost">Saiba mais</a>
        </div>
    </div>
</section>

<section class = "funcionamento">
    <div class = "container">
        <h1 class = "section__titulo funcionamento__titulo sombreado--left">Como funciona</h1>
        <object class = "passo-a-passo"></object>
        <a href = "produtor.php" class = "button button--normal">Inscreva-se!</a>
    </div>
</section>

<section class = "locacoes">
    <div class = "container">
        <ul class = "locacoes__grade">
            <li class = "locacao colorir">
                <a href = "locacao.php">
                    <img src = "https://rioofficefilmcommission.com.br/wp-content/uploads/2019/04/Jardim-Bot%C3%A2nico.jpg" alt = "" loading = "lazy">
                    <h2 class = "locacao__nome">Jardim Botânico</h2>
                </a>
            </li>

            <li class = "locacao colorir">
                <a href = "locacao.php">
                    <img src = "http://mapadecultura.rj.gov.br/manchetes/img/lightbox/rio_candelaria_ika9412.jpg" alt = "" loading = "lazy">
                    <h2 class = "locacao__nome">Igreja da Candelária</h2>
                </a>
            </li>

            <li class = "locacao colorir">
                <a href = "locacao.php">
                    <img src = "https://upload.wikimedia.org/wikipedia/commons/c/c9/Theatro_Municipal_-_Rio.jpg" alt = "" loading = "lazy">
                    <h2 class = "locacao__nome">Theatro Municipal</h2>
                </a>
            </li>

            <li class = "locacao colorir">
                <a href = "#">
                    <img src = "https://upload.wikimedia.org/wikipedia/commons/2/26/Funda%C3%A7%C3%A3o_Casa_Fran%C3%A7a-Brasil.jpg" alt = "" loading = "lazy">
                    <h2 class = "locacao__nome">Casa França-Brasil</h2>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class = "recursos">
    <div class = "container">
        <h1 class = "section__titulo recursos__titulo sombreado--right">Fornecedores</h1>

        <ul class = "recursos__grade">
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Atores</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Maquiadores</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Editores</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Fotógrafos</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Veículos</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Contra-Regras</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Animais</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Sonoplastas</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Produtores Musicais</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Cinegrafistas</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Figurinistas</a></li>
            <li class = "recurso"><a class = "colorido deslocado" href = "fornecedores.php">Ver mais</a></li>
        </ul>
    </div>
</section>

<div class = "incentivos">
    <ul class = "incentivos__lista">
        <li class = "incentivo">
            <a href = "http://cultura.rj.gov.br/lei-de-incentivo" target = "_blank"><img src = "docs/logo_icms.png"></a>
        </li>
        <!-- <li class = "incentivo">
            <a href = "#"><img src = "https://www.firjan.com.br/custom/FIRJAN/IFGF/images/brd-logo-footer.png"></a>
        </li>
        <li class = "incentivo">
            <a href = "#"><img src = "http://www.sicavrj.org.br/wp-content/uploads/2018/01/logo31-sicav.png"></a>
        </li> -->
    </ul>
</div>

<section class = "filmagens">
    <div class = "container">
        <h1 class = "section__titulo sombreado--left">Filmados no<br> Rio de Janeiro</h1>
        <div>
            <button class = "filmagens__scroller scroller-left"></button>
            <ul class = "filmagens__grade">
                <li class = "filmado">
                    <a href = "#">
                        <h2>Velozes e Furiosos 5 - Operação Rio</h2>
                        <img src = "http://megapixparaimprensa.com.br/wp-content/uploads/2018/10/velozes_e_furiosos_5_operacao_rio_op_dwayne_high.jpg">
                    </a>
                </li>

                <li class = "filmado">
                    <a href = "#">
                        <h2>A Saga Crepúsculo: Amanhecer - Parte 1</h2>
                        <img src = "https://daveexaminesmovies.files.wordpress.com/2012/11/2011_twilight_breaking_dawn_025.jpg">
                    </a>
                </li>
            </ul>
            <button class = "filmagens__scroller scroller-right"></button>
        </div>
    </div>
</section>

<section class = "artigos">
    <div class = "container">
        <h1 class = "section__titulo recursos__titulo sombreado--right">Últimas notícias</h1>
        <ul class = "artigos__grade">
            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "https://i0.wp.com/curitibadegraca.plural.jor.br/wp-content/uploads/2019/02/Filmagem-em-estu-dio.jpg?ssl=1" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 4min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>

            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "http://2.bp.blogspot.com/-3mVzXvDncWY/UQhP8Po8k4I/AAAAAAAAET0/qIlgO8ldk3w/s1600/dsc_9830.jpg" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 3min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>

            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "https://assets.b9.com.br/wp-content/uploads/2018/05/5ace4404facba839008b45c5-1280x720.png" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 7min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>

            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "http://www.artifactsfilms.com.br/imagens/orcamento-para-filmagem-submarina.jpg" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 5min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>

            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "https://museudoamanha.org.br/sites/default/files/Corte-de-imagem_header%201280x720.png" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 4min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>
            <li class = "artigo">
                <a class = "deslocado" href = "noticia.php">
                    <img src = "https://cdn-cv.r4you.co/wp-content/uploads/2019/09/filmagem-no-cerrado.jpg" alt = "">
                    <h2>Lorem Ipsum dolor sit amet</h2>

                    <p class = "artigo__excerpt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </p>

                    <p class = "artigo__metadata">
                        Tempo de leitura: 6min<br>
                        22 de Julho de 2019
                    </p>
                </a>
            </li>

        </ul>
    </div>
</section>

<section class = "video">
    <video src = "docs/rofc_video.mp4" controls muted preload = "metadata"></video>
</section>

<section class = "parceiros">
        <h1 class = "section__titulo contato__titulo sombreado--right">Parceiros</h1>
        <ul class = "parceiros__lista">
            <li class = "parceiro">
                <a href = "#"><img src = "https://www.grupoabrav.com.br/wp-content/uploads/2018/11/LOGO-ABRAV-2.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.rebrafic.net/wp-content/uploads/2015/05/Logo_PNG_500x2341.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.cinemadobrasil.org.br/wp-content/themes/cinema-do-brasil/img/logo.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "https://www.firjan.com.br/custom/FIRJAN/IFGF/images/brd-logo-footer.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.sicavrj.org.br/wp-content/uploads/2018/01/logo31-sicav.png"></a>
            </li>
        </ul>

        <h1 class = "section__titulo contato__titulo sombreado--right">Apoio</h1>
        <ul class = "parceiros__lista">
            <li class = "parceiro">
                <a href = "#"><img src = "https://www.grupoabrav.com.br/wp-content/uploads/2018/11/LOGO-ABRAV-2.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.rebrafic.net/wp-content/uploads/2015/05/Logo_PNG_500x2341.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.cinemadobrasil.org.br/wp-content/themes/cinema-do-brasil/img/logo.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "https://www.firjan.com.br/custom/FIRJAN/IFGF/images/brd-logo-footer.png"></a>
            </li>
            <li class = "parceiro">
                <a href = "#"><img src = "http://www.sicavrj.org.br/wp-content/uploads/2018/01/logo31-sicav.png"></a>
            </li>
        </ul>
    </div>
</section>

<section id = "contato" class = "contato">
    <div class = "container">
        <h1 class = "section__titulo contato__titulo sombreado--left">Fale conosco</h1>

        <div class = "contato__container">
            <!-- <div class = "contato__formulario">
                <h2>Através do formulário</h2>
                <form action = "#" method = "post" class = "contato__form">
                    <div class = "form__amarrador">
                        <label for = "nome">Nome e sobrenome</label>
                        <input id = "nome" type = "text" name = "nome" required>
                    </div>

                    <div class = "form__amarrador">
                        <label for = "endereco-email">Endereço de email</label>
                        <input id = "endereco-email" type = "email" name = "endereco-email" required>
                    </div>

                    <div class = "form__amarrador">
                        <label for = "assunto">Assunto</label>
                        <input id = "assunto" type = "text" name = "assunto" required>
                    </div>

                    <div class = "form__amarrador">
                        <label for = "mensagem">Mensagem</label>
                        <textarea id = "mensagem" name = "mensagem" required></textarea>
                    </div>

                    <button type = "submit" class = "button button--normal selecionavel">Enviar</button>
                </form>
            </div> -->

            <div class = "contato__endereco">
                <h2>Venha nos visitar!</h2>
                <div class = "endereco__container">
                    <p>Avenida Presidente Vargas, 1261 - Centro, Rio de
                        Janeiro - RJ, Brasil<br>
                        Horário de atendimento:<br>
                        Endereço de email:
                    </p>

                    <iframe class = "endereco__mapa" src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2431656653994!2d-43.18948918503432!3d-22.904400185012992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f69b7af770f%3A0xda2a1e8542563c13!2sAv.+Pres.+Vargas%2C+1261+-+Centro%2C+Rio+de+Janeiro+-+RJ%2C+20071-004!5e0!3m2!1sen!2sbr!4v1565708979413!5m2!1sen!2sbr" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<?php include("footer.php") ?>
