<?php require_once('header.php'); ?>

<style type="text/css">
    .custom-loader {
        width: 12px;
        height: 12px;
        background: #FFFFFF;
        border-radius: 50%;
        box-shadow: 20px 0 #FFFFFF22, -20px 0 #FFFFFF;
        animation: d5 1s infinite linear alternate;
    }

    @keyframes d5 {
        0% {
            box-shadow: 20px 0 #FFFFFF, -20px 0 #FFFFFF22;
            background: #FFFFFF
        }

        33% {
            box-shadow: 20px 0 #FFFFFF, -20px 0 #FFFFFF22;
            background: #FFFFFF22
        }

        66% {
            box-shadow: 20px 0 #FFFFFF22, -20px 0 #FFFFFF;
            background: #FFFFFF22
        }
    }
</style>

<div class="container conteudo">
    <img src="images/banner-simulador-de-ganhos.svg" class="w-100 mobile-d-none" />

    <div class="banner-bg mobile-d-block mb-4 bg-warning fundoLaranja">
        <label class="banner-titulo fonteAzulEscuro">Resultado de<br>Cotação</label>
        <label class="banner-texto text-white">Descubra quantos pontos é possível ganhar na fatura do cartão de
            crédito</label>
    </div>

    <nav aria-label="breadcrumb" class="mobile-d-none">
        <ol class="breadcrumb pt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Simulador de Ganhos</li>
        </ol>
    </nav>

    <div class="col-md-12 text-center mt-4 mb-5 mobile-d-none">
        <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="col-md-12 text-center mb-5 mobile-d-block">
        <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="row my-2">

        <div class="col-md-9 w-100-tablet">

            <div>

                <div class="blocoSearchBlue w-100 text-center">
                    <span class="NunitoWhite700 my-4 zeroAuto d-inline-grid px-5 ms-2-5 text-center">Resultado de
                        Cotação</span>
                </div>

                <div class="left w-100 mb-5 pb-4" style="background: #BFBFBF;">

                    <div class="w-100 left py-5 text-center d-grid-mob">
                        <span class="NunitoGrey500-2">Cotação para:</span>
                        <span class="NunitoBlue700-3 mt-3-mob">&nbsp; 1.000 milhas</span>
                    </div>

                    <div class="card border-0 col-md-4 w-47-mob-3-per-2 px-2 zeroAuto pb-3 borda-azul my-5">
                        <a class="text-decoration-none">
                            <div class="w-100">
                                <img src="images/logo-azul.svg" class="w-120px mt-3 ms-1">
                                <input type="radio" class="float-end mt-3 me-2 radio-group radio-1" name="color"
                                    checked />
                            </div>
                            <span class="NunitoGray500 pt-2 px-2 w-100 d-block">Azul</span>
                        </a>
                    </div>

                    <div class="w-100">
                        <div class="card card-1 card-box-shadow w-95 zeroAuto h-auto pb-3">

                            <img src="images/logo-maxmilhas.svg" class="zeroAuto py-4" />

                            <div class="w-100">
                                <hr class="w-95 zeroAuto my-2" />
                            </div>
                            <div class="w-100">
                                <div class="w-95 zeroAuto py-1 d-grid-mob text-center-mobile-2">
                                    <span class="NunitoGrey500-2 text-center-mobile-2 left pt-2">30 dias</span>
                                    <span class="NunitoBlue700-3 float-end text-center-mobile-2">R$ 16,00</span>
                                    <span
                                        class="NunitoGrey500-2 float-end text-center-mobile-2 pt-2 pe-3">Milheiro:</span>
                                </div>
                            </div>
                            <div class="w-100">
                                <hr class="w-95 zeroAuto my-2" />
                            </div>
                            <div class="w-100">
                                <div class="w-95 zeroAuto py-1 d-grid-mob text-center-mobile-2">
                                    <span class="NunitoGrey500-2 text-center-mobile-2 left pt-2">60 dias</span>
                                    <span class="NunitoBlue700-3 float-end text-center-mobile-2">R$ 16,00</span>
                                    <span
                                        class="NunitoGrey500-2 float-end text-center-mobile-2 pt-2 pe-3">Milheiro:</span>
                                </div>
                            </div>
                            <div class="w-100">
                                <hr class="w-95 zeroAuto my-2" />
                            </div>
                            <div class="w-100">
                                <div class="w-95 zeroAuto py-1 d-grid-mob text-center-mobile-2">
                                    <span class="NunitoGrey500-2 text-center-mobile-2 left pt-2">90 dias</span>
                                    <span class="NunitoBlue700-3 float-end text-center-mobile-2">R$ 16,00</span>
                                    <span
                                        class="NunitoGrey500-2 float-end text-center-mobile-2 pt-2 pe-3">Milheiro:</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="w-100 left pb-3 d-grid-mob">

                    <a class="botaoRedondo1 text-decoration-none cursror pointer px-4 px-0-mob botao-100per-mob px-5 float-start mb-3 text-center-mobile-2"
                        style="padding-left: 100px !important;padding-right: 100px !important;">
                        <span class="texto-botao"><img src="images/arrow-right-1.svg"
                                class="transform180 float-start p-1 mobile-d-none" /> &nbsp; Refazer cálculo</span>
                    </a>

                    <a class="botaoRedondo1 bgVerde text-decoration-none cursror pointer px-4 px-0-mob botao-100per-mob px-5 d-inline-block float-end mb-5 text-center-mobile-2"
                        style="padding-left: 100px !important;padding-right: 100px !important;">
                        <span class="texto-botao">Visitar o site &nbsp; <img src="images/arrow-right-1.svg"
                                class="p-1 mobile-d-none" /></span>
                    </a>

                </div>

                <div class="w-100 left mt-4">
                    <span class="w-100 left NunitoGray700 mb-2">Observações:</span>
                    <span class="w-100 left NunitoGray700-4">As informações coletadas para cálculos são atualizadas
                        periodicamente e essas informações podem ser alteradas a qualquer momento.</span>
                </div>

                <div class="col-md-12 mt-5 mobile-d-none">
                    <h3 class="NunitoBlue700-2 bgDark-fonte-1 text-center-mobile pt-5 left w-100">Dicas especiais de
                        quem entende do
                        assunto <a
                            class="NunitoBlue500 float-end text-decoration-none pointer pt-2 bgDark-fonte-1 mobile-d-none">Acesse
                            o
                            blog...</a></h3>
                </div>

                <div id="dicas-especiais" class="row mobile-d-none">
                    <div class="col-md-6 mt-3">
                        <div class="card card-2 border-0 inline-box w-100 card-50-50">
                            <div class="col-6">
                                <img src="images/dica-1-mob.svg" class="photo-card-1 photo-card-2 w-100">
                            </div>
                            <div class="col-6 ps-4 card-2-p-3-linhas">
                                <p class="NunitoGray500 pt-3 mb-0 pe-3">Sinta-se à vontade para<br>personalizar o texto
                                    do
                                    botão e
                                    o<br>link de acordo com as suas necess..</p>
                                <a class="NunitoGray400 pointer text-decoration-none pt-2 float-start w-100"
                                    href="#">Aug/23
                                    <img src="images/arrow-right-2.svg" class="float-end pe-3 width-auto"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card card-2 border-0 inline-box w-100 card-50-50">
                            <div class="col-6">
                                <img src="images/bg-dica-3.svg" class="photo-card-1 photo-card-2 w-100">
                            </div>
                            <div class="col-6 ps-4 card-2-p-3-linhas">
                                <p class="NunitoGray500 pt-3 mb-0 pe-3">Sinta-se à vontade para<br>personalizar o texto
                                    do
                                    botão e
                                    o<br>link de acordo com as suas necess..</p>
                                <a class="NunitoGray400 pointer text-decoration-none pt-2 float-start w-100"
                                    href="#">Aug/23
                                    <img src="images/arrow-right-2.svg" class="float-end pe-3 width-auto"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-2 border-0 inline-box w-100 card-50-50">
                            <div class="col-6">
                                <img src="images/bg-dica-3.svg" class="photo-card-1 photo-card-2 w-100">
                            </div>
                            <div class="col-6 ps-4 card-2-p-3-linhas">
                                <p class="NunitoGray500 pt-3 mb-0 pe-3">Sinta-se à vontade para<br>personalizar o texto
                                    do
                                    botão e
                                    o<br>link de acordo com as suas necess..</p>
                                <a class="NunitoGray400 pointer text-decoration-none pt-2 float-start w-100"
                                    href="#">Aug/23
                                    <img src="images/arrow-right-2.svg" class="float-end pe-3 width-auto"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card card-2 border-0 inline-box w-100 card-50-50">
                            <div class="col-6">
                                <img src="images/bg-dica-4.svg" class="photo-card-1 photo-card-2 w-100">
                            </div>
                            <div class="col-6 ps-4 card-2-p-3-linhas">
                                <p class="NunitoGray500 pt-3 mb-0 pe-3">Sinta-se à vontade para<br>personalizar o texto
                                    do
                                    botão e
                                    o<br>link de acordo com as suas necess..</p>
                                <a class="NunitoGray400 pointer text-decoration-none pt-2 float-start w-100"
                                    href="#">Aug/23
                                    <img src="images/arrow-right-2.svg" class="float-end pe-3 width-auto"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-100 row ms-1">
                    <div class="col-md-12 text-center mt-0 mb-0">
                        <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo mobile-d-none py-5" />
                        <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo mobile-d-block py-5" />
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-3 desktop-d-block">
            <img src="images/anuncio-1.svg" class="w-100">
            <img src="images/anuncio-5.svg" class="w-100 mt-4">
            <img src="images/anuncio-1.svg" class="w-100 mt-4">
            <img src="images/anuncio-5.svg" class="w-100 mt-4">
        </div>

    </div>


</div>

<?php require_once('footer.php'); ?>