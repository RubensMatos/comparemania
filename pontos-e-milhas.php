<?php require_once('header.php'); ?>

<div class="container conteudo">
    <img src="images/banner-pontos-e-milhas.svg" class="w-100 mobile-d-none" />

    <div class="banner-bg mobile-d-block mb-4">
        <label class="banner-titulo">Pontos e Milhas</label>
        <label class="banner-texto">Antes de realizar suas compras online, compare e garanta os melhores ganhos em
            pontos e milhas aéreas.</label>
    </div>

    <nav aria-label="breadcrumb" class="mobile-d-none">
        <ol class="breadcrumb pt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pontos e Milhas</li>
        </ol>
    </nav>

    <div class="col-md-12 text-center mt-4 mobile-d-none">
        <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="col-md-12 text-center mobile-d-block">
        <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="my-5 w-100 row">

        <div class="col-md-9" id="blocoPontosMilhas">

            <div class="d-flex d-block-mob">

                <div class="input-group mb-3 col-9 pe-3 w-60 w-100-mob ps-2-mob">
                    <input type="text" class="form-control input-2" placeholder="Buscar Lojas" aria-label="Buscar Lojas"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bt-input-search-1" type="button"><img
                                src="images/ico-search.svg"></button>
                    </div>
                </div>

                <select class="form-select form-select-1 input-2 col-2 me-3 w-20 left-mob w-60-mob me-2-mob ms-2-mob"
                    aria-label="Ordenar por:" placeholder="Ordernar por:">
                    <option selected disabled>Ordenar por:</option>
                    <option value="1">Mais relevantes</option>
                    <option value="2">Mais pontos</option>
                    <option value="3">Menos pontos</option>
                </select>

                <select class="form-select form-select-1 custom-select input-2 col-1 w-10 w-20-mob left-mob me-2-mob">
                    <option selected="">A-Z</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>

                <div class="w-10 text-center pt-2 left-mob w-10-mob">
                    <img src="images/ico-list.svg" class="pointer" id="btPontosMilhas" />
                </div>

            </div>

            <div class="col-md-12 pe-4">

                <div class="table-responsive table-responsive w-100 py-3 tablePontosMilhas d-none">
                    <table class="table table-striped borderRadiusTop10">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 borderRadiusTopLeft10">
                                    Loja</th>
                                <th scope=" col" class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500">Melhor
                                    Ganho
                                </th>
                                <th scope=" col" class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500">Latam
                                </th>
                                <th scope=" col" class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500">Azul
                                </th>
                                <th scope=" col" class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500">GOL
                                </th>
                                <th scope=" col" class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500">Livelo
                                </th>
                                <th scope=" col"
                                    class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 borderRadiusTopRight10">
                                    Outros
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                            <tr>
                                <td class="bgWhite">Magazine Luiza</td>
                                <td class="text-center NunitoGray500 bgGray box-shadow-none">5 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                                <td class="text-center NunitoGray500">1 pts/R$</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example" class="text-center tablePontosMilhas d-none">
                    <ul class="pagination pagination-1 justify-content-center mt-4 mb-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="arrow-left-1"></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">32</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="arrow-right-1"></span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="col-md-12 text-center mt-5 mb-0 tablePontosMilhas d-none">
                    <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo mobile-d-none" />
                    <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo mobile-d-block" />
                </div>

                <div class="col-md-12 text-center mt-5 mb-0 d-none">
                    <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo mobile-d-none" />
                    <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo mobile-d-block" />
                </div>

            </div>

            <div class="w-100 row py-3 ms-1 cardsPontosMilhas">

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-uber.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Uber</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-visa.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Visa</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">2 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-ponto.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Ponto</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">3 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-extra.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Extra</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">5 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-livelo.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Livelo</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">1 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per  w-47-mob-3-per">
                    <img src="images/card-ico-azul.svg" class="w-120px mt-4 ms-1" />
                    <span class="NunitoGray500 ms-2 pt-3">Azul</span>
                    <a href="#"><span class="NunitoGray700-3 ms-2 pt-1 w-95 left">9 pts por R$ <img
                                src="images/arrow-right-4.svg" class="w-11px float-end me-1" /></span>
                    </a>
                </div>

                <nav aria-label="Page navigation example" class="text-center">
                    <ul class="pagination pagination-1 justify-content-center mt-4 mb-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="arrow-left-1"></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">32</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="arrow-right-1"></span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="col-md-12 text-center mt-0 mb-0">
                    <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo mobile-d-none" />
                    <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo mobile-d-block" />
                </div>

            </div>

        </div>

        <div class="col-md-3 anunciosPontosMilhas">
            <img src="images/anuncio-9.svg" class="zeroAuto" />
            <img src="images/anuncio-5.svg" class="zeroAuto mt-4" />
        </div>

    </div>

</div>

<?php require_once('footer.php'); ?>