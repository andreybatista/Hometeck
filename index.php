<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="src/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="src/css/slick-theme.css" />



</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex flex-row justify-content-start">
                    <button id="btnMenu">
                        <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="30" height="4" rx="2" fill="#336699" />
                            <rect y="12" width="30" height="4" rx="2" fill="#336699" />
                            <rect y="24" width="30" height="4" rx="2" fill="#336699" />
                        </svg>
                    </button>
                </div>
                <div class="col-4 d-flex flex-row justify-content-center">
                    <a href="">
                        <img class="img-fluid" src="img/logo_mobile.png">
                    </a>
                </div>
                <div class="col-4 d-flex flex-row justify-content-end">
                    <a href="">
                        <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.8162 19.8503H8.90202L9.90191 17.7365L26.5154 17.7052C27.0772 17.7052 27.5588 17.2887 27.6591 16.7125L29.9599 3.34598C30.0201 2.99541 29.9298 2.63444 29.7091 2.36023C29.6 2.22528 29.4639 2.11658 29.3103 2.04166C29.1567 1.96674 28.9892 1.9274 28.8195 1.92637L7.68476 1.85348L7.50418 0.971861C7.39048 0.40957 6.90224 0 6.34712 0H1.18047C0.86739 0 0.567133 0.129087 0.345752 0.358864C0.124371 0.588641 0 0.900285 0 1.22524C0 1.55019 0.124371 1.86184 0.345752 2.09161C0.567133 2.32139 0.86739 2.45048 1.18047 2.45048H5.3907L6.17991 6.34486L8.12284 16.1086L5.62145 20.3466C5.49155 20.5286 5.4133 20.7446 5.39558 20.9704C5.37785 21.1961 5.42134 21.4225 5.52112 21.6239C5.72177 22.0369 6.12641 22.2973 6.57452 22.2973H8.67462C8.2269 22.9145 7.98508 23.6662 7.98573 24.4388C7.98573 26.4034 9.52402 28 11.4168 28C13.3096 28 14.8478 26.4034 14.8478 24.4388C14.8478 23.6648 14.6004 22.9116 14.159 22.2973H19.5463C19.0986 22.9145 18.8568 23.6662 18.8574 24.4388C18.8574 26.4034 20.3957 28 22.2885 28C24.1813 28 25.7195 26.4034 25.7195 24.4388C25.7195 23.6648 25.4721 22.9116 25.0307 22.2973H28.8195C29.4683 22.2973 30 21.7489 30 21.072C29.9981 20.7474 29.8725 20.4368 29.6507 20.2079C29.4289 19.979 29.1289 19.8504 28.8162 19.8503ZM8.17635 4.26925L27.4317 4.33519L25.5456 15.2964L10.4202 15.3242L8.17635 4.26925ZM11.4168 25.5356C10.8349 25.5356 10.36 25.0428 10.36 24.4388C10.36 23.8349 10.8349 23.342 11.4168 23.342C11.9987 23.342 12.4735 23.8349 12.4735 24.4388C12.4735 24.7297 12.3622 25.0087 12.164 25.2144C11.9658 25.4201 11.6971 25.5356 11.4168 25.5356ZM22.2885 25.5356C21.7066 25.5356 21.2317 25.0428 21.2317 24.4388C21.2317 23.8349 21.7066 23.342 22.2885 23.342C22.8704 23.342 23.3452 23.8349 23.3452 24.4388C23.3452 24.7297 23.2339 25.0087 23.0357 25.2144C22.8375 25.4201 22.5688 25.5356 22.2885 25.5356Z" fill="#336699" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="input-pesquisa position-relative">
                    <svg class="icon-pesquisa" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3007 14.3801C15.3007 14.3801 15.3007 14.3801 15.3007 14.3801V14.3801ZM1.20615 4.59631C0.910884 5.28734 0.744794 6.00932 0.707886 6.76227C0.7448 6.00935 0.910892 5.28738 1.20615 4.59638C1.54361 3.80663 1.9975 3.12869 2.56784 2.56255C3.13818 1.99641 3.81784 1.54445 4.60681 1.20667C5.39578 0.868888 6.22277 0.699997 7.08779 0.699997C7.95281 0.699997 8.7798 0.868888 9.56877 1.20667C10.3577 1.54445 11.0374 1.99641 11.6077 2.56255C12.1781 3.12869 12.632 3.80663 12.9694 4.59638C13.2051 5.14783 13.3584 5.71784 13.4295 6.30641C13.3584 5.71782 13.2051 5.14779 12.9694 4.59631C12.632 3.80657 12.1781 3.12863 11.6077 2.56249C11.0374 1.99635 10.3577 1.54439 9.56877 1.20661C8.7798 0.868827 7.95281 0.699936 7.08779 0.699936C6.22277 0.699936 5.39578 0.868827 4.60681 1.20661C3.81784 1.54439 3.13818 1.99635 2.56784 2.56249C1.9975 3.12863 1.54361 3.80657 1.20615 4.59631ZM12.2066 10.9048L15.0298 13.7307C15.1809 13.882 15.2688 14.0583 15.2935 14.2595C15.2688 14.0583 15.1809 13.882 15.0298 13.7307L12.2066 10.9048C12.2066 10.9048 12.2066 10.9048 12.2066 10.9048ZM11.6505 7.08686C11.6505 7.1383 11.6497 7.18951 11.6481 7.24048C11.6497 7.18953 11.6505 7.13834 11.6505 7.08692C11.6505 7.0869 11.6505 7.08688 11.6505 7.08686ZM11.6183 7.64334C11.5461 8.25678 11.3525 8.83488 11.0374 9.37765C10.6287 10.0818 10.0749 10.636 9.37628 11.0404C8.67761 11.4448 7.91478 11.647 7.08779 11.647C6.2608 11.647 5.49797 11.4448 4.7993 11.0404C4.10063 10.636 3.54693 10.0818 3.13818 9.37765C2.72944 8.67354 2.52507 7.90996 2.52507 7.08692C2.52507 7.0869 2.52507 7.08688 2.52507 7.08686C2.52507 7.9099 2.72944 8.67348 3.13818 9.37759C3.54693 10.0817 4.10063 10.6359 4.7993 11.0403C5.49797 11.4447 6.2608 11.6469 7.08779 11.6469C7.91478 11.6469 8.67761 11.4447 9.37628 11.0403C10.0749 10.6359 10.6287 10.0817 11.0374 9.37759C11.3525 8.83484 11.5461 8.25676 11.6183 7.64334ZM11.1213 11.9916L10.9382 11.8083L10.7302 11.9627C9.64073 12.7716 8.42954 13.1738 7.08779 13.1738C6.26303 13.1738 5.47624 13.0131 4.72488 12.6914C3.96882 12.3677 3.3217 11.9343 2.78008 11.3921C2.23815 10.8497 1.8051 10.204 1.48177 9.45184C1.16071 8.70501 0.999977 7.91759 0.999977 7.08692C0.999977 6.25625 1.16072 5.46621 1.48202 4.71425C1.80534 3.95758 2.23812 3.31255 2.77919 2.77547C3.3209 2.23775 3.9683 1.80637 4.72488 1.48246C5.47624 1.16078 6.26303 0.999997 7.08779 0.999997C7.91255 0.999997 8.69934 1.16078 9.4507 1.48246C10.2073 1.80637 10.8547 2.23775 11.3964 2.77547C11.9375 3.31255 12.3702 3.95758 12.6936 4.71425C13.015 5.46642 13.1756 6.2541 13.1756 7.07978C13.1756 8.433 12.7734 9.64497 11.9663 10.7252L11.8109 10.9332L11.9944 11.1168L14.8175 13.9428C14.9428 14.0682 15.0007 14.2087 15.0007 14.3801C15.0007 14.5516 14.9428 14.6921 14.8175 14.8175C14.6923 14.9429 14.552 15.0007 14.381 15.0007C14.21 15.0007 14.0697 14.9429 13.9445 14.8175L11.1213 11.9916ZM7.08779 2.22687C6.20938 2.22687 5.39451 2.44231 4.64902 2.8738C3.90467 3.30463 3.3135 3.89663 2.87873 4.64558C2.44312 5.39596 2.22507 6.21158 2.22507 7.08692C2.22507 7.96226 2.44312 8.77788 2.87873 9.52826C3.3135 10.2772 3.90467 10.8692 4.64902 11.3C5.39451 11.7315 6.20938 11.947 7.08779 11.947C7.9662 11.947 8.78107 11.7315 9.52656 11.3C10.2709 10.8692 10.8621 10.2772 11.2968 9.52826C11.7325 8.77788 11.9505 7.96226 11.9505 7.08692C11.9505 6.21158 11.7325 5.39596 11.2968 4.64558C10.8621 3.89663 10.2709 3.30463 9.52656 2.8738C8.78107 2.44231 7.9662 2.22687 7.08779 2.22687Z" fill="#DBDBDB" />
                    </svg>
                    <input class="w-100" placeholder="Pesquisar produtos...">
                </div>
            </div>
        </div>
    </header>
    <div id="slideMenu" class="menu effect" style="left: -100%;">
        <div class="slide-header d-flex flex-row justify-content-start align-items-center">
            <button id="btnMenu">
                <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="30" height="4" rx="2" fill="#336699" />
                    <rect y="12" width="30" height="4" rx="2" fill="#336699" />
                    <rect y="24" width="30" height="4" rx="2" fill="#336699" />
                </svg>
            </button>
            <h2 class="w-100">
                Olá, <strong>Visitante</strong>!
            </h2>
            <button id="btnClose">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2L24 24M24 2L2 24" stroke="#336699" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </button>
        </div>
        <div class="slide-body">
            <h2>
                Todos os Departamentos
            </h2>
            <ul>
                <li>
                    <a>
                        Drywall
                    </a>
                </li>
                <li>
                    <a>
                        Steel Frame
                    </a>
                </li>
                <li>
                    <a>
                        Forro Removível
                    </a>
                </li>
                <li>
                    <a>
                        Isolamento Acústico
                    </a>
                </li>
                <li>
                    <a>
                        Cola, Silicone E Argamassa
                    </a>
                </li>
                <li>
                    <a>
                        Ferramenta
                    </a>
                </li>
                <li>
                    <a>
                        Piso Vinílico
                    </a>
                </li>
            </ul>

            <h2>
                Hometeck Atacadista
            </h2>
            <ul>
                <li>
                    <a>
                        <img class="img-fluid" src="img/logo_menulateral.png">
                        Sobre nós
                    </a>
                </li>
                <li>
                    <a>
                        <img class="img-fluid" src="img/icon_regulamentos.png">
                        Regulamentos
                    </a>
                </li>
                <li>
                    <a>
                        <img class="img-fluid" src="img/icon_localizacao.png">
                        Nossas lojas
                    </a>
                </li>
            </ul>

            <h2>
                Facilidade pra Você
            </h2>
            <ul>
                <button class="w-100 d-flex flex-row justify-content-start align-items-center">
                    <img class="img-fluid" src="img/icon_calculadora.png">
                    Calculadora de Materias
                </button>
                <button class="w-100 d-flex flex-row justify-content-center align-items-center">
                    <img class="img-fluid" src="img/icon_solicitarorcamento.png">
                    Solicitar Orçamento
                </button>
                <button class="btnlateral-entrar w-100">
                    ENTRAR
                </button>
            </ul>
            <p>
                Cadastre sua empresa.
            </p>
            <p>
                Acesso imediato às ofertas exclusivas para CNPJ!
            </p>
            <p>
                TELEVENDAS: 0800 222 2222F
            </p>
        </div>
    </div>

    <?php include "body.html"; ?>

    <div class="background-slider"></div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="src/js/slick.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="src/js/script.js"></script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>