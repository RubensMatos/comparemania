<?php require_once('header.php'); ?>

<div class="container conteudo">
    <img src="images/banner-promocoes.svg" class="w-100 mobile-d-none" />

    <div class="banner-bg mobile-d-block mb-4 bg-warning bg-opacity-50">
        <label class="banner-titulo fonteAzulEscuro">Promoções</label>
        <label class="banner-texto text-primary">Encontre o cartão de crédito que mais combina com você.</label>
    </div>

    <nav aria-label="breadcrumb" class="mobile-d-none">
        <ol class="breadcrumb pt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Promoções</li>
        </ol>
    </nav>

    <div class="col-md-12 text-center mt-4 mobile-d-none">
        <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="col-md-12 text-center mobile-d-block">
        <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo" />
    </div>

    <div class="my-5 w-100 row">

        <div class="col-md-12" id="blocoCartoes">

            <div class="d-flex d-block-mob w-97 ms-2 blocoCamposPesquisa">

                <div class="input-group mb-3 col-9 pe-3 w-50 w-100-mob ps-2-mob">
                    <input type="text" class="form-control input-2" placeholder="Buscar Lojas" aria-label="Buscar Lojas"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bt-input-search-1" type="button"><img
                                src="images/ico-search.svg"></button>
                    </div>
                </div>

                <select class="form-select form-select-1 input-2 col-2 me-3 w-40 left-mob w-73-mob me-2-mob ms-2-mob me-1-rem-mob"
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

            </div>

            <div class="col-md-12 pe-4">

                <nav aria-label="Page navigation example" class="text-center tableCartoes d-none">
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

            </div>

            <div class="col-md-12 text-center mt-5 mb-2 d-none tableCartoes">
                <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo mobile-d-none" />
                <img src="images/anuncio-18.svg" class="zeroAuto anuncio-1-conteudo mobile-d-block" />
            </div>

            <div class="w-100 row py-3 ms-2 cardsCartoes">

                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-amazon.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-monitor-gamer.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-extra.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-ola.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-magalu.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-aspirador.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Aspirador de Pó
                            Vertical Portátil Philco Power Clean PAS4000</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-amazon.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-monitor-gamer.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-extra.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-ola.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-magalu.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-aspirador.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Aspirador de Pó
                            Vertical Portátil Philco Power Clean PAS4000</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-amazon.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-monitor-gamer.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-extra.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-ola.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-magalu.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-aspirador.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Aspirador de Pó
                            Vertical Portátil Philco Power Clean PAS4000</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-amazon.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-monitor-gamer.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-extra.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-ola.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-magalu.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-aspirador.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Aspirador de Pó
                            Vertical Portátil Philco Power Clean PAS4000</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>

                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-amazon.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-monitor-gamer.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-extra.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-ola.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Console Playstation 5
                            825 GB Sony 4K</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 mb-3 card-20per card-31per w-47-mob-3-per  card-20per-desktop">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-left">
                            <img src="images/logo-magalu.svg" class="pt-3 ps-1" />
                        </div>
                        <div class="w-100 text-center">
                            <img src="images/img-aspirador.svg" class="mt-4 ms-1 zeroAuto w-100">
                        </div>
                        <span class="NunitoGray500 pt-2 text-left px-0 w-100 d-block left mh-73">Aspirador de Pó
                            Vertical Portátil Philco Power Clean PAS4000</span>
                        <span class="NunitoGrey500-3 pt-2 left">Menor preço</span>
                        <span class="NunitoGray700-4 pt-1 w-95 left text-left left">R$3.830,00</span>
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

    </div>

</div>

<?php require_once('footer.php'); ?>