<?php require_once('header.php'); ?>

<div class="container conteudo">
    <img src="images/banner-cartoes-de-credito.svg" class="w-100" />

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cartões</li>
        </ol>
    </nav>

    <div class="col-md-12 text-center mt-4">
        <img src="images/anuncio-8.svg" class="zeroAuto" />
    </div>

    <div class="my-5 w-100 row">

        <div class="col-md-9" id="blocoCartoes">

            <div class="d-flex">

                <div class="input-group mb-3 col-9 pe-3 w-60">
                    <input type="text" class="form-control input-2" placeholder="Buscar Lojas" aria-label="Buscar Lojas"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary bt-input-search-1" type="button"><img
                                src="images/ico-search.svg"></button>
                    </div>
                </div>

                <select class="form-select form-select-1 input-2 col-2 me-3 w-20" aria-label="Ordenar por:"
                    placeholder="Ordernar por:">
                    <option selected disabled>Ordenar por:</option>
                    <option value="1">Mais relevantes</option>
                    <option value="2">Mais pontos</option>
                    <option value="3">Menos pontos</option>
                </select>

                <select class="form-select form-select-1 custom-select input-2 col-1 w-10">
                    <option selected="">A-Z</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>

                <div class="w-10 text-center pt-2">
                    <img src="images/ico-list.svg" class="pointer" id="btCartoes" />
                </div>

            </div>

            <div class="col-md-12 pe-4">

                <table class="table table-striped borderRadiusTop10 tableCartoes d-none">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 borderRadiusTopLeft10 align-middle">
                                Cartão</th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Tipo
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Ganho
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Anuidade
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Sala VIP
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Proteção
                                de Preço
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Proteção
                                de Compra
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Garantia
                                Estendida
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Seguro
                                Veículo
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 align-middle">Seguro
                                Saúde
                            </th>
                            <th scope=" col"
                                class="bgBlue3 fonteBranco fw-normal text-center NunitoWhite500 borderRadiusTopRight10 align-middle">
                                Outros
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul Itaú Visa Infinite
                                <img src="images/cartao-itaucard.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                        <tr>
                            <td class="text-center NunitoGray500 align-middle d-grid">
                                Azul
                                <img src="images/cartao-azul-1.svg" />
                            </td>
                            <td class="text-center NunitoGray500 align-middle">Magazine Luiza</td>
                            <td class="text-center NunitoGray500 align-middle">Pontos</td>
                            <td class="text-center NunitoGray500 align-middle">0.45 pts por R$</td>
                            <td class="text-center NunitoGray500 align-middle">Pode Isentar</td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-check.svg" /></td>
                            <td class="text-center NunitoGray500 align-middle"><img src="images/ico-remove.svg" /></td>
                        </tr>
                    </tbody>
                </table>

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
                <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
            </div>

            <div class="w-100 row py-3 ms-1 cardsCartoes">

                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
                    </a>
                </div>
                <div class="card border-0 col-md-4 pb-3 me-2 mb-3 card-30per">
                    <a href="#" class="text-decoration-none">
                        <div class="w-100 text-center">
                            <img src="images/cartao-itaucard.svg" class="w-120px mt-4 ms-1 zeroAuto">
                        </div>
                        <span class="NunitoGray500 ms-2 pt-3 text-center px-3 w-100 d-block">Latam Pass Itaucard
                            Mastercard Black</span>
                        <span class="NunitoGray700-3 ms-2 pt-1 w-95 left text-center">1.42 pontos por R$</span>
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
                    <img src="images/anuncio-8.svg" class="zeroAuto anuncio-1-conteudo" />
                </div>

            </div>

        </div>

        <div class="col-md-3 anunciosCartoes">
            <img src="images/anuncio-9.svg" class="zeroAuto" />
            <img src="images/anuncio-5.svg" class="zeroAuto mt-4" />
        </div>

    </div>

</div>

<?php require_once('footer.php'); ?>