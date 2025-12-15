<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tesLARAVEL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <style>
        .nav-item:hover {
            background-color: lightcyan;
            color: #e8a20dff;
            border: 1px solid light;
        }

        .side-bare {
            background: #64621484;
        }

        .sidebare {
            max-height: 80vh;
            max-width: 90%;
            position: fixed;
            top: 0;
            left: 0;
            margin-top: 70px;
        }

        .nav1 {
            position: fixed;
            width: 100%;
            height: 70px;
        }

        .applayout {
            margin-top: 70px;
        }


        .nav-icon {
            font-family: "Monsieur La Doulaise", cursive;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-right: 20px;
            font-size: 2rem;
        }

        .nav-icon span {

            /* font-size: 3rem; */
            margin-left: 20px;
            /* font-weight: 600;   */
            color: #d0d019;
        }

        .nav-icon img {
            width: 40px;
            transform: rotate(-17deg) translateX(5px);
            color: #d0d019;
        }

        .hamburger {
            display: none;
        }

        .nav-autentification {
            margin-left: auto;
        }

        .sign-btns button {
            font-family: Roboto Flex, sans-serif;
            font-size: 16px;
            min-width: 90px;
            padding: 10px 16px;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        .sign-btns button:nth-child(2) {
            border: none;
            background: #92c3eeb7;
        }

        .sign-user {
            display: none;
        }

        .sign-user img {
            height: 2rem;
        }

        @media(max-width:900px) {
            .applayout {
                width: 100%;
            }

            ide-bare {
                display: none;
            }

            .nav-icon {
                order: 2;
                margin: 0 auto;
            }

            .nav-icon span {
                color: orange;
            }

            .main-navlinks {
                order: 1;
            }

            .sidebare {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                position: absolute;
                top: 0px;
                left: 0;
                background: #64621484;
                backdrop-filter: blur(5px);
                width: 100%;
                /* -webkit-backdrop-filter: blur(5px); */
                height: max-content;
                padding: 15px 50px 15px 20px;
                border-radius: 1px solid #c5c5c6;
                transform: translate(-100%);
                /* transition: transform 0.3s ease-out; */
            }

            .sidebare.open {
                transform: translate(0%);
                z-index: 999;

            }


            .sign-btns {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                position: absolute;
                background: #64621484;
                top: 100%;
                right: 0;
                gap: 10px;
                height: max-content;
                padding: 15px 20px;
                border-radius: 1px solid #c5c5c6;
                transform: translate(100%);
            }

            .open {
                transform: translate(0%);
            }

            .hamburger {
                width: 20px;
                height: 20px;
                cursor: pointer;
                border: none;
                display: flex;
                background: transparent;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .hamburger span {
                display: block;
                height: 2px;
                width: 100%;
                background: #333;
                position: absolute;
                pointer-events: none;
                transition: opacity 0.3s 0.15s ease-out;
            }

            .hamburger span:nth-child(1),
            .hamburger span:nth-child(3) {
                transition: transform 0.3s ease-out;
            }

            .hamburger span:nth-child(1) {
                transform: translateY(7px);
            }

            .hamburger span:nth-child(3) {
                transform: translateY(-7px);
            }

            .hamburger.open span:nth-child(1) {
                transform: translate(0) rotate(135deg);
            }

            .hamburger.open span:nth-child(2) {
                opacity: 0;
                transition: opacity 0s ease-out;
            }

            .hamburger.open span:nth-child(3) {
                transform: translate(0) rotate(-135deg);
            }

            .sidebare a {
                font-size: 18px;
                margin: 10px 0;
            }

            .nav-autentification {
                order: 3;
                margin-left: 0;
            }



            /* .sign-btns {
        display: none;
    } */

            .sign-user {
                display: block;
                cursor: pointer;
                border: none;

            }

            .sign-user img {
                width: 20px;
            }
        }

        @media(max-width:500px) {
            .nav-icon img {
                width: 30px;
            }

        }
    </style>
    <header>
        <nav class="">
            <div class="nav1 navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <a href="#" class="nav-icon" aria-label="visit-homepage" aria-current="page">
                        <span>DB</span>com
                    </a>
                    <div class="main-navlinks">
                        <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
                            <span></span><span></span><span></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto gap-2 mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708" />
                                    </svg>
                                    <sup class="fw-bold text-light bg-danger px-1 rounded-circle mx-0">1</sup>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Prix total :100/- cfa</a>
                            </li>
                        </ul>
                        <!-- <form class="d-flex" role="search" action="search.php" method="get">
                        <input class="form-control me-2" style="width: 130px;" type="search" name="search_data" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success rounded-5" value="search" type="submit" name="search_product">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                                viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>

                        <!-- <input type="submit" value="Search"  class="btn btn-outline-success rounded-5" name="search_product"> -->
                        </form>
                    </div>
                  
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row " style="min-height: 100vh;">
            <div class="col-md-2 text-light  side-bare" id="">
                <div class="sidebare">
                    <div class="container-fluid px-0">
                        <ul class="flex-column px-0 py-2">
                            <li class="my-3 list-unstyled nav-item py-1 rounded-3 px-1">
                                <a href="{{ route('ventes.index') }}" class="nav-link px-1 text ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning  bi bi-receipt mb-1" viewBox="0 0 16 16">
                                        <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
                                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
                                    </svg>
                                    <span class="ms-1"> Ventes Total</span>
                                </a>
                            </li>
                            <li class="my-3 list-unstyled nav-item py-1 rounded-3 px-1">
                                <a href="{{ route('produits.index') }}" class="nav-link px-1 text ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning bi bi-box-seam" viewBox="0 0 16 16">
                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                                    </svg>
                                    <span class="ms-1">Produits</span>
                                </a>
                                <ul class="listes"></ul>
                            </li>
                            <li class="my-3 list-unstyled nav-item py-1 rounded-3 px-1">
                                <a href="{{ route('vendeurs.index') }}" class="nav-link px-1 text ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning  bi bi-person-workspace mb-1" viewBox="0 0 16 16">
                                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                                    </svg>
                                    <span class="ms-1"> Vendeurs</span>
                                </a>
                            </li>
                            <li class="my-3 list-unstyled nav-item py-1 rounded-3 px-1 d-flex ">
                                <a href="{{ route('clients.index') }}" class="nav-link px-1 text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning  bi bi-people mb-1" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                    </svg>
                                    <span class="ms-1">Clients</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10  text-info applayout" style="background: #f1f1f2;">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        const hamburgerToggler = document.querySelector(".hamburger")
        const navLinksContener = document.querySelector(".sidebare")

        const toggleNav = () => {
            hamburgerToggler.classList.toggle("open")

            const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
            hamburgerToggler.setAttribute("aria-expanded", ariaToggle)
            navLinksContener.classList.toggle("open")
        }
        hamburgerToggler.addEventListener("click", toggleNav)


        new ResizeObserver(entries => {

            if (entries[0].contentRect.width <= 900) {
                navLinksContener.style.transition = "transform 0.3s ease-out"
            } else {
                navLinksContener.style.transition = "none"
            }
        }).observe(document.body)


        const signUser = document.querySelector(".sign-user")
        const signBtn = document.querySelector(".sign-btns")


        const toggleNa = () => {
            signUser.classList.toggle("open")

            const ariaToggle = signUser.getAttribute("aria-expanded") === "true" ? "false" : "true";
            signUser.setAttribute("aria-expanded", ariaToggle)
            signBtn.classList.toggle("opens")
        }
        signUser.addEventListener("click", toggleNa)



        new ResizeObserver(entries => {

            if (entries[0].contentRect.width <= 900) {
                navLinksContener.style.transition = "transform 0.3s ease-out"
            } else {
                navLinksContener.style.transition = "none"
            }
        }).observe(document.body)
    </script>

</body>

</html>