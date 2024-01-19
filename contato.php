<?php require_once('header.php'); ?>

<div class="container conteudo">
    <img src="images/banner-contato.svg" class="w-100" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fale conosco</li>
        </ol>
    </nav>

    <div class="col-md-12 text-center mt-4">
        <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="container conteudo">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-1 border-1" id="floatingInput"
                        placeholder="Digite o Nome">
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-1 border-1" id="floatingInput"
                        placeholder="Digite o Nome">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control input-1 border-1" id="floatingInput"
                        placeholder="Digite o Nome">
                    <label for="floatingInput">Assunto</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control border-1" placeholder="Mensagem" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Mensagem</label>
                </div>

                <div class="text-center py-4">
                    <img src="images/recaptcha.svg" />
                </div>

                <div class="form-check">
                    <input class="form-check-input check-1 mt-2 left" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label label-1 ps-2 bgDark-fonte-1" for="defaultCheck1">
                        Autorizo contato do Inter para prestação desse serviço. Dúvidas acesse nossa <a href="#"
                            class="link-1 bgDark-fonte-1">Política de Privacidade</a>
                    </label>
                </div>

                <div class="text-center my-5">
                    <a class="botaoRedondo2 text-decoration-none pointer w-185px zeroAuto">Enviar</a>
                </div>

            </div>
        </div>
    </div>

</div>

<?php require_once('footer.php'); ?>