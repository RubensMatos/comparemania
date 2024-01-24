<footer>
    <div class="container">
        <div class="row py-5 pb-4">
            <div class="col-md-4 d-inline-flex col-1-footer">
                <img src="images/logo-white.svg" width="75px" height="70px" />
                <div class="d-block ps-5 ms-4 col-1-footer-sub">
                    <h5>O Compremania</h5>
                    <a class="linkUnderline" href="sobre-nos.php">Sobre Nós</a>
                    <a class="linkUnderline" href="politica-de-privacidade.php">Política de Privacidade</a>
                    <a class="linkUnderline" href="termos-de-uso.php">Termos de Uso</a>
                </div>
            </div>
            <div class="col-md-2  col-2-footer col-1-footer-sub">
                <h5>Destaques</h5>
                <a class="linkUnderline" href="pontos-e-milhas.php">Pontos e Milhas</a>
                <a class="linkUnderline" href="cashback.php">Cashback</a>
                <a class="linkUnderline" href="cartoes-de-credito.php">Cartões de Crédito</a>
                <a class="linkUnderline" href="#">Calculadora de Milhas</a>
                <a class="linkUnderline" href="#">Simulador de Ganhos</a>
                <a class="linkUnderline" href="#">Simulador de Fatura</a>
                <a class="linkUnderline" href="promocoes.php">Promoções</a>
                <a class="linkUnderline" href="#">Transferência Bonificada</a>
                <a class="linkUnderline" href="#">Todas as Categorias</a>
            </div>
            <div class="col-md-2  col-3-footer col-1-footer-sub">
                <h5>Informações</h5>
                <a class="linkUnderline" href="contato.php">Fale Conosco</a>
                <a class="linkUnderline" href="perguntas-frequentes.php">Perguntas Frequentes</a>
                <a class="linkUnderline" href="#">Blog</a>
            </div>
            <div class="col-md-4 col-4-footer col-1-footer-sub col-last-footer">
                <h3>Baixe nosso app</h3>
                <p>Compare pontos, milhas e cashback mais rápido, e tenha descontos exclusivos.</p>
                <div class="d-flex bd-highlight mb-4">
                    <a class="flex-fill bd-highlight px-1 tablet-d-none"><img src="images/qrcode-app-store.svg" /></a>
                    <a class="flex-fill bd-highlight px-1 tablet-d-none"><img src="images/qrcode-play-store.svg" /></a>
                    <div class="tablet-flex-center-auto d-none d-flex-tablet d-flex-mobile ms-37-per-tablet">
                        <a class="bd-highlight px-1"><img src="images/app-store.svg" /></a>
                        <a class="bd-highlight px-1"><img src="images/play-store.svg" /></a>
                    </div>
                </div>
                <div class="d-flex bd-highlight w-50-tablet ico-sociais-footer">
                    <a class="flex-fill bd-highlight text-center"><img src="images/ico-instagram-white.svg"
                            class="zeroAuto ico-blue-white" /></a>
                    <a class="flex-fill bd-highlight text-center"><img src="images/ico-facebook-white.svg"
                            class="zeroAuto ico-blue-white" /></a>
                    <a class="flex-fill bd-highlight text-center"><img src="images/ico-android-white.svg"
                            class="zeroAuto ico-blue-white" /></a>
                    <a class="flex-fill bd-highlight text-center"><img src="images/ico-ios-white.svg"
                            class="zeroAuto ico-blue-white" /></a>
                    <a class="flex-fill bd-highlight text-center"><img src="images/ico-chrome-white.svg"
                            class="zeroAuto ico-blue-white" width="31px" height="31px" /></a>
                </div>
            </div>
            <div class="col-md-12 mt-3 col-5-footer">
                <p><small>O uso deste site está sujeito aos termos e condições do Termo de Uso e Política de
                        privacidade.<br>&copy; Comparemania. Todos os direitos reservados.</small></p>
            </div>
        </div>
    </div>
</footer>

<button onclick="topFunction()" id="up" title="Go to top"><img src="images/arrow-up.svg" /></button>

<script>

    document.addEventListener('DOMContentLoaded', function () {

        $(".bt-alerta-1, .alerta-container").on({
            mouseenter: function () {
                $(".alerta-container").stop().fadeIn();
            },
            mouseleave: function () {
                $(".alerta-container").stop().fadeOut();
            },
            touchstart: function () {
                $(".alerta-container").stop().fadeIn();
            },
            touchend: function () {
                $(".alerta-container").stop().fadeOut();
            }
        });

        var owl = $('#slide-0');

        let numItensCarousel;

        if (window.innerWidth > 1200) {
            numItensCarousel = 5;
        } else if (window.innerWidth > 1000) {
            numItensCarousel = 4;
        } else if (window.innerWidth > 800) {
            numItensCarousel = 3;
        } else {
            numItensCarousel = 2;
        }

        owl.owlCarousel({
            items: numItensCarousel,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 400,
            autoplayHoverPause: true
        });

        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        });

        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        });


        if (window.innerWidth < 768) {

            $("#transferencia-bonificada").addClass('owl-carousel').after(function () {

                var slide3 = $("#transferencia-bonificada");

                slide3.owlCarousel({
                    items: 2,
                    loop: true,
                    margin: 0,
                    nav: false
                });
            });

            $("#dicas-especiais").addClass('owl-carousel').after(function () {

                var slide4 = $("#dicas-especiais");

                slide4.owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    nav: false
                });
            });
        }

        var slide1 = $("#slide-1");

        slide1.owlCarousel({
            items: numItensCarousel,
            loop: true,
            margin: 0,
            nav: true
        });

        var slide2 = $("#slide-2");

        slide2.owlCarousel({
            items: numItensCarousel,
            loop: true,
            margin: 0,
            nav: true
        });

        var banner1 = $("#banner-1");

        banner1.owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 450,
            nav: true,
            loop: true,
            checkVisible: true
        });

        var bannerHeader = $("#slideBannerHeader");

        bannerHeader.owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            items: 1,
            margin: 0,
            nav: false,
            animateOut: 'fadeOut'
        });

        function verificaEstilo(cookieStatus) {

            if (cookieStatus == 'checked') {

                $(".modeChecked").show();
                $(".modeUnchecked").hide();

                $(".header2").removeClass('bgAzulEscuro');
                $(".cabecalho2").removeClass('cabecalho2Black');
                $("body").removeClass('bgDark');
                $("#flexSwitchCheckChecked").removeClass('check-bgDark');
                $('.dropdown-toggle').removeClass('dropdown-toggle-bgdark');
                $(".vr25").removeClass('bgWhite');
            } else {

                $(".modeUnchecked").show();
                $(".modeChecked").hide();

                $(".header2").addClass('bgAzulEscuro');
                $(".cabecalho2").addClass('cabecalho2Black');
                $("body").addClass('bgDark');
                $("#flexSwitchCheckChecked").addClass('check-bgDark');
                $('.dropdown-toggle').addClass('dropdown-toggle-bgdark');
                $(".vr25").addClass('bgWhite');
            }
        }

        function getCookie(name) {
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i].trim();
                if (cookie.startsWith(name + '=')) {
                    return cookie.substring(name.length + 1);
                }
            }
            return null;
        }

        function setCookie(name, value, days) {
            const expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = 'expires=' + expirationDate.toUTCString();
            document.cookie = name + '=' + value + '; ' + expires + '; path=/';
        }

        function handleCheckboxChange() {
            const checkboxes = document.getElementsByClassName('flexSwitchCheckChecked');

            for (const checkbox of checkboxes) {
                checkbox.addEventListener('change', function () {
                    const isChecked = this.checked;
                    setCookie(`checkboxStatus_${this.id}`, isChecked ? 'checked' : 'unchecked', 365);
                    var cookieStatus = getCookie(`checkboxStatus_${this.id}`);
                    verificaEstilo(cookieStatus);
                });
            }
        }

        handleCheckboxChange();

        $(".fechaTopo").click(function () {

            $(".cinza").fadeOut();
        });

        $("#btPontosMilhas").click(function () {

            $("#blocoPontosMilhas").each(function () {

                if ($(this).hasClass('col-md-12')) {

                    $("#btPontosMilhas").attr('src', 'images/ico-list.svg');

                    $(this).removeClass('col-md-12');
                    $(".tablePontosMilhas").addClass('d-none');
                    $(".cardsPontosMilhas").removeClass('d-none');
                    $(".anunciosPontosMilhas").removeClass('d-none');

                } else {

                    $("#btPontosMilhas").attr('src', 'images/ico-grid.svg');

                    $(this).addClass('col-md-12');
                    $(".tablePontosMilhas").removeClass('d-none');
                    $(".cardsPontosMilhas").addClass('d-none');
                    $(".anunciosPontosMilhas").addClass('d-none');
                }
            })
        });

        $("#btCashback").click(function () {

            $("#blocoCashback").each(function () {

                if ($(this).hasClass('col-md-12')) {

                    $("#btCashback").attr('src', 'images/ico-list.svg');

                    $(this).removeClass('col-md-12');
                    $(".tableCashback").addClass('d-none');
                    $(".cardsCashback").removeClass('d-none');
                    $(".anunciosCashback").removeClass('d-none');

                } else {

                    $("#btCashback").attr('src', 'images/ico-grid.svg');

                    $(this).addClass('col-md-12');
                    $(".tableCashback").removeClass('d-none');
                    $(".cardsCashback").addClass('d-none');
                    $(".anunciosCashback").addClass('d-none');
                }
            })
        });

        $("#btCartoes").click(function () {

            $("#blocoCartoes").each(function () {

                if ($(this).hasClass('col-md-12')) {

                    $("#btCartoes").attr('src', 'images/ico-list.svg');

                    $(this).removeClass('col-md-12');
                    $(".tableCartoes").addClass('d-none');
                    $(".cardsCartoes").removeClass('d-none');
                    $(".anunciosCartoes").removeClass('d-none');

                } else {

                    $("#btCartoes").attr('src', 'images/ico-grid.svg');

                    $(this).addClass('col-md-12');
                    $(".tableCartoes").removeClass('d-none');
                    $(".cardsCartoes").addClass('d-none');
                    $(".anunciosCartoes").addClass('d-none');
                }
            })
        });

        function alternarCaminhoWhiteBlue(src) {

            if (src.includes('-white')) {
                return src.replace('-white', '-blue');
            } else if (src.includes('-blue')) {
                return src.replace('-blue', '-white');
            }
            return src;
        }

        function adicionarOuRetirarBlue(src) {

            var posicaoPonto = src.lastIndexOf('.');
            var caminhoSemExtensao = src.substring(0, posicaoPonto);
            var extensao = src.substring(posicaoPonto);

            if (caminhoSemExtensao.endsWith('-blue')) {
                return caminhoSemExtensao.slice(0, -5) + extensao;
            }

            return caminhoSemExtensao + '-blue' + extensao;
        }

        $(".ico-blue-white").hover(function () {

            $(this).each(function () {

                var src = $(this).attr('src');

                $(this).attr('src', alternarCaminhoWhiteBlue(src));
            });
        });

        $(".ico-blue").hover(function () {

            $(this).each(function () {

                var src = $(this).attr('src');

                $(this).attr('src', adicionarOuRetirarBlue(src));
            });
        });

        $("#botaoMenuTopo").click(function () {

            $("#bgBlackTranspFull").addClass('d-block');
        });

        $("#botaoMenuTopoFecha").click(function () {

            $("#bgBlackTranspFull").removeClass('d-block');
        });
    });

</script>

<script>

    let mybutton = document.getElementById("up");

    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {

        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

</body>

</html>