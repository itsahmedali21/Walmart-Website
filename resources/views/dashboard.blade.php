<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walmart Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex align-items-center d-lg-none bg-primary ">
                <a class="navbar-brand d-lg-none d-flex  offcanvas-ignore" style="margin-top: -9px;" href="">
                    <img src="https://i5.walmartimages.com/dfw/ecf648a-237c/k2-_6d66b486-7502-401d-939d-c9c1f6f22e11.v1.png"
                        alt="">
                </a>
                <div class="input-group mt-1 mb-3 ">
                    <input type="text" class="custom-input border-1 px-4 " style="border-radius: 23px;"
                        placeholder="Find Everything at Walmart Store" aria-label="Search">
                </div>
            </div>
            <button class="btn d-flex  align-items-center justify-content-between d-lg-none " type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"
                aria-label="Toggle navigation menu">
                <div class=" position-absolute text-white fs-2" style="margin-top: -10%; margin-left: 90%;">
                    ☰
                </div>
            </button>
            <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive"
                aria-labelledby="offcanvasResponsiveLabel">
                <div class="offcanvas-body">
                    <nav class="navbar navbar-expand-lg bg-primary ">
                        <div class="container-fluid fluiding mx-2">
                            <a class="navbar-brand  offcanvas-ignore d-none d-lg-inline" style="margin-top: -9px;"
                                href="">
                                <img src="https://i5.walmartimages.com/dfw/ecf648a-237c/k2-_6d66b486-7502-401d-939d-c9c1f6f22e11.v1.png"
                                    alt="">
                            </a>
                            <div class="collapse navbar-collapse show">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle toggle d-flex " href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="pt-1">
                                                 <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-ad46/k2-_0a671c38-d307-447c-835e-7904ab143c26.v1.png"
                                                    alt="" style="height: 34px;">
                                            </div>
                                            <div class="mx-2">
                                                <h6 class="d-inline text-white "
                                                    style="letter-spacing: -0.74px;font-weight:700">¿Cómo quieres tus
                                                    artículo?</h6>
                                                <p class="text-white" style="font-size: 13px;">Sacramento, 95824•
                                                    Sacramento Superce</p>
                                            </div>

                                        </a>
                                        <ul class="dropdown-menu menu bg-primary">
                                            <li class="d-flex justify-content-center">
                                                <DIV class="mx-3 ">
                                                    <img
                                                        src="https://i5.walmartimages.com/dfw/4ff9c6c9-486e/k2-_4be6f532-b0b2-4480-bb65-d53586e87193.v1.png">
                                                    <p class="text-white">Envio</p>
                                                </DIV>
                                                <DIV class="mx-3">
                                                    <img
                                                        src="https://i5.walmartimages.com/dfw/4ff9c6c9-944a/k2-_333618e2-7327-4081-990e-7870dd062248.v1.png">
                                                    <p class="text-white">Retiro</p>
                                                </DIV>
                                                <DIV class="mx-3">
                                                    <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-4637/k2-_c8d39665-dac4-474a-9fb7-ab5feeb647b5.v1.png"
                                                        alt="">
                                                    <p class="text-white">Entrega</p>
                                                </DIV>

                                            </li>
                                            <div class="entrega bg-white w-100 p-3">
                                                <div class="d-flex">
                                                    <i class="fa-solid fa-location-dot fa-sm pt-2"
                                                        style="color: #000000;"></i>
                                                    <h6 class="mx-1 clash-war">Agrega una dirección de envío y entrega
                                                    </h6>
                                                </div>
                                                <p class="contas-war">Sacramento, CA 95829</p>
                                                <button class="btn w-100 text-white">Agregar Direction</button>
                                            </div>

                                            <div class=" bg-white w-100 p-3 mt-2"
                                                style="height: 64px;border-radius: 7px;">
                                                <div class="d-flex">
                                                    <i class="fa-solid fa-house fa-sm pt-2 "></i>
                                                    <h6 class="mx-1 clash-war">Sacramento Supercenter</h6>
                                                </div>
                                                <p class="contas-war">
                                                    8915 GERBER ROAD, Sacramento,</p>
                                            </div>
                                        </ul>

                                    <li class="nav-item">
                                        <div class="input-group mt-1 mb-3 d-none d-lg-flex">
                                            <input type="text" class="custom-input " style="border-radius: 23px;"
                                                placeholder="Find Everything at Walmart Store" aria-label="Search">
                                            <span class="input-group-text my-2"
                                                style="border-radius: 50%;background-color: #002e99;margin-left: -7%;     padding: .275rem .45rem;">
                                                <i class="fas fa-search text-white"></i>
                                            </span>
                                        </div>
                                    </li>

                                    <li class="nav-item navbar-second-content d-flex ">
                                        <div class="mt-3">
                                            <i class="fa-regular fa-heart" style="color: #f0f0f0;"></i>
                                        </div>
                                        <div class="mx-2">
                                            <p class="my-2 text-white " style="height: 3px;">Recorder</p>
                                            <h6 class="text-white mt-3">My Articles</h6>
                                        </div>

                                    </li>

                                    <li class="nav-item navbar-second-content d-flex">
                                        <div class="mt-3">
                                            <i class="fa-solid fa-user" style="color: #f7f9fc;"></i>
                                        </div>
                                        <a href="{{ route('welcome') }}">
                                        <div class="mx-2">
                                                <p class="my-2 text-white " style="height: 3px;">User</p>
                                                <h6 class="text-white mt-3">Account</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item navbar-second-content d-flex ml-3">
                                        <div class="mt-2">
                                            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                            <p class="text-white">0.00$</p>
                                        </div>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex dropship ">
                <div class="dropdown down-ship mx-4 mt-2">
                    <h6 class="dropdown-toggle pt-2 pr-3 pb-3" data-bs-toggle="dropdown" style="font-weight: 700;">
                        <i class="fa-regular fa-address-card fa-md" style="color: #5699e1;"></i>
                        Departments
                    </h6>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item mt-1 " href="#">Farmacia, Salud y Bienestar</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Ropa, Zapatos y Accesorios</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Bebé y Niños</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Belleza</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Hogar, Jardín y Herramientas</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Tecnología & Electrónica</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Juguetes y Juegos al Aire Libre</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Papel & Limpieza</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Consumibles</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Mascotas</a></li>
                        <li><a class="dropdown-item mt-2" href="#">Auto y Llantas</a></li>
                    </ul>
                </div>
                <div class="dropdown down-ship mx-2 mt-2">
                    <h6 class="dropdown-toggle pt-2 px-2 pb-2" data-bs-toggle="dropdown" style="font-weight: 700;">
                        <i class="fa-regular fa-address-card fa-md" style="color: #5699e1;"></i>
                        service
                    </h6>
                    <ul class="dropdown-menu">
                        <!-- Todos los Servicios -->
                        <a class="dropdown-item mt-2" href="#">Servicios Automotrices</a>
                        <a class="dropdown-item mt-2" href="#">Farmacia</a>
                        <a class="dropdown-item mt-2" href="#">Visión y Óptico</a>
                        <a class="dropdown-item mt-2" href="#">Seguros y Beneficios</a>
                        <a class="dropdown-item mt-2" href="#">Listas y Regalos</a>
                        <a class="dropdown-item mt-2" href="#">Pasteles Personalizados</a>
                        <a class="dropdown-item mt-2" href="#">Servicios Fotográficos</a>
                        <a class="dropdown-item mt-2" href="#">Servicios Financieros</a>
                        <a class="dropdown-item mt-2" href="#">Protección, Hogar, y Tecnología</a>
                        <a class="dropdown-item mt-2" href="#">Suscripciones</a>
                        <a class="dropdown-item mt-2" href="#">Comunidad y Donación</a>
                        <a class="dropdown-item mt-2" href="#">Compras, simplificado</a>
                </div>
                <div class="scroll-container">
                    <div class="scroll-text d-flex align-items-center">
                        <a href="#" class="nav-link mx-3 mt-1">Pharmacy Delivery</a>
                        <a href="#" class="nav-link mx-3 mt-1">New</a>
                        <a href="#" class="nav-link mx-3 mt-1">Mother's Day</a>
                        <a href="#" class="nav-link mx-3 mt-1">The Beauty Event</a>
                        <a href="#" class="nav-link mx-3 mt-1">Fashion</a>
                        <a href="#" class="nav-link mx-3 mt-1">Home</a>
                        <a href="#" class="nav-link mx-3 mt-1">Patio and Garden</a>
                        <a href="#" class="nav-link mx-3 mt-1">Electronics</a>
                        <a href="#" class="nav-link mx-3 mt-1">Grocery</a>
                        <a href="#" class="nav-link mx-3 mt-1">Gift List</a>
                        <a href="#" class="nav-link mx-3 mt-1">OnePay</a>
                        <a href="#" class="nav-link mx-3 mt-1">Walmart+</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid section-class mb-3">
        <div class="row">
            <div class="col-3">
                <div class=" books">
                    <h5 class="mt-4 pt-2  mx-4 position-absolute ">Patio furniture , decor &
                        more</h5>
                    <span class="text-decoration-underline  position-absolute"> Shop Now</span>
                    <img class="secter-124" src="/imges/k2-_78b3e2fb-bf23-45ba-88ff-1d492d517ca7.v1.jpg" alt="">
                </div>
                <div class=" books mt-lg-3">
                    <h5 class="mt-2 pt-2  mx-4 position-absolute ">1000s of finds for way
                        less</h5>
                    <span class="text-decoration-underline   position-absolute" style="margin-top: 7%;"> Shop Now</span>
                    <img class="sectore-214 via-link" height=" 503px;"
                        src="/imges/k2-_099dd5a8-8a5e-4957-a281-4d41751b128b.v1.jpg" alt="">
                    <p class=" creater position-absolute ">$13.48</p>
                </div>
                <div class=" books mt-3">
                    <h5 class="mt-2 pt-2  mx-4 position-absolute ">Toys & outdoor play from 5$
                    </h5>
                    <span class="text-decoration-underline   position-absolute" style="margin-top: 6%;"> Shop Now</span>
                    <img class="secter-129 " src="/imges/toys.jpg" alt="">
                </div>
            </div>
            <div class="col-5  fix_up">
                <div class="books">
                    <h4 class="position-absolute  my-1 w-25 mx-4 mt-4 font-bold">A new home Collection</h4>
                    <h2 class="position-absolute my-5 mx-lg-4  ">Mainstays by Becky G & Alejendra</h2>
                    <button class=" position-absolute bg-white px-3 py-1 mx-4 control ">Shop Now</button>
                    <img class="selection" src="/imges/k2-_7bc8f213-210b-4445-85e2-b36013330a52.v1.jpg" alt="">
                    <p class=" creater position-absolute ">$6</p>
                </div>
                <div class="row mt-3 decor">
                    <div class="col-5">
                        <div class="books">
                            <h5 class="mt-4 pt-2  mx-md-4 position-absolute ">Up to 40% off Shark
                                flore care</h5>
                            <span class="text-decoration-underline  position-absolute"> Shop Now</span>
                            <img class="fash_deals" src="/imges/k2-_ead7a07f-1083-4e8e-8c5c-96b51c3f7981.v1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-2  ml-5">
                        <div class="books">
                            <img class="fash_deals donald" src="/imges/Screenshot (103).png" alt="">
                        </div>
                    </div>
                </div>
                <div class=" row congress mt-3 mx-md-3">
                    <div class="col-8 py-lg-3 px-3">
                        <img style="height: 32px;"
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-b71b/k2-_444d4fab-41a8-48b1-8233-35efff603c27.v1.png"
                            alt="">
                        <span style="font-size: 11px;" class="d-none d-lg-inline">Just For Members</span>
                        <h1 class="mt-2 mx-lg-2">Get ready for 50¢ off per gallon of gas & more!</h1>
                        <a href="" class="text-dark nav-link text-decoration-underline mx-2 mt-md-4 mt-1">Try it
                            free</a>
                    </div>
                    <div class="col-2 warnet">
                        <img class=" decor-offset"
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-d79e/k2-_d5719461-3284-47b5-9b0d-4f3d37361b9c.v1.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-3 varcar">
                <div class=" books">
                    <h4 class="mt-4 pt-2 controvocy  mx-3 position-absolute ">Up to 40% off gifts for mom
                    </h4>
                    <span class="text-decoration-underline  position-absolute"> Shop Now</span>
                    <img class="secter-999" src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_1eabb702-5b37-4f68-8944-52ea777c14b5.v1.jpg" alt="" >
                </div>
                <div class=" books mt-lg-3">
                    <h4 class="mt-lg-4 controvocy  mx-3 position-absolute absolute">Must Have Reads</h4>
                    <span class="text-decoration-underline   position-absolute" style="margin-top: 6%;"> Shop Now</span>
                    <img class="secter-199" src="/imges/books.jpg" alt="">
                </div>
                <div class=" books mt-lg-3">
                    <img class="via-link secter-299 " src="/imges/Screenshot (104).png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-lg-3">
        <div>
            <h5 class="fs-4" style="font-weight: 700;">Get Glowing</h5>
            <p class="mx-1" style="font-size: 13px;color: rgb(128, 120, 120);">Best-selling scents from BHG & more.
        </div>
        <div class="row centra">
            <div class="col-6 volunteer">
                <img src="/imges/Screenshot (106).png" alt="">
            </div>
            <div class="col-6 ml-5">
                </p>
                <div class="row">
                    <div class="col-4 counter counter-less align-items-center py-lg-4">
                        <img class="w-100 wrbox"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <h6 class=" mx-3 my-2" style="font-weight: 800;">$5.97</h6>
                        <p class="mx-3 security">Better Homes & Garden Salted
                            Coconut and Mahogany Scente</p>
                        <button class="px-3 my-2 mx-3" style="border-radius: 23px;">Option</button>
                    </div>
                    <div class="col-4 counter  align-items-center  py-lg-4 my-lg-3  ">
                        <img class="w-75 dta-candle "
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <h6 class=" mx-3 mt-lg-4 mt-3" style="font-weight: 800;">$15.97</h6>
                        <p class="mx-3 security">Mainstays 3 Wick Textured
                            Wrap Cranberry mandarin Candle</p>
                        <button class="px-3 my-1 mx-3" style="border-radius: 23px;">Option</button>
                    </div>
                    <div class="col-4 waracih  align-items-center  py-lg-4 my-lg-3">
                        <img class="w-75 h-lg-100"
                            src="data:image/jpeg;base64,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"
                            alt="">
                        <h6 class=" mx-3 mt-lg-5 mt-1" style="font-weight: 800;">$15.97</h6>
                        <p class="mx-3 security ">Mainstays 3 Wick Textured
                            Wrap Cranberry mandarin Candle</p>
                        <button class="px-3 my-1 mx-3" style="border-radius: 23px;">Option</button>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-3 py-lg-3">
        <h3 style="font-weight: 700;">Flash Deals</h3>
        <p>Up to 65% off</p>
        <div class="row py-4 d-flex flex-wrap">
            <div class="col-2 collage-life">
                <img src="data:image/jpeg;base64,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"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Egg-Chair-with-Stand-Patio-Wicker-Bifanuo-Hanging-Chair-Hammock-Swing-Chair-350LBS-Capacity-for-Bedroom-Balcony-Garden_679bd58a-d3aa-4c53-a2c6-ea6cf6131777.0a3a26c757440301258dd1c5538c7715.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/SENIX-Gas-Lawn-mower-20in-144cc-4-Cycle-Engine-Rear-Wheel-Drive-Steel-Deck-with-Side-Discharge-LSPG-L4_ac486c32-6bdd-4d51-8072-c49393b26381.9a5656ef7c920b6357094977d42aa3c8.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12 ">
                <img src="https://i5.walmartimages.com/seo/Bifanuo-Double-Wicker-Swing-Egg-Chair-Hammock-Foldable-Hanging-Loveseat-Stand-UV-Resistant-Removable-Cushions-700LBS-Capacity-Bedroom-Balcony-Black-G_3087c91d-ba68-444e-a709-1e4bd2a73ff9.4e78a123678a117a44fc51cb431bb6e3.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12"><img
                    src="https://i5.walmartimages.com/seo/Fantaslook-Women-Summer-Dresses-V-Neck-Ruffle-Sleeve-Casual-Flowy-Sundresses-Button-Floral-Midi-Dress-with-Pockets_bdddfe89-9540-446d-ad65-a6e662a8ba87.58e35d7ffadc7eb6f30c221d6d8bcbea.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller">
                <img src="https://i5.walmartimages.com/asr/f7fe07e3-b333-4991-b013-53c3cc9a013e.12905b2bd2357ebf5cc10c1c8fa7a1dd.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
        </div>
    </div>
    <div class="container-fluid border-top pt-5 mx-lg-3 mx-2">
        <h5 style="font-weight: 700;">Get it all right here</h5>
        <div class="row scrolling-position ">
            <div class="col-1 septizer controller-12">
                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-d59a/k2-_3c62c186-8ec0-4541-9e7c-24efaa163e9f.v1.png?odnHeight=120&odnWidth=120&odnBg=FFFFFF"
                    alt="">
                <p class="shopping ">Grocery</p>
            </div>
            <div class="col-1 septizer">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_ddcfae2e-c70f-43f6-b234-71fcba59bdac.v1.png" alt="">
                <p class="shopping ">Home</p>
            </div>
            <div class="col-1 septizer controller-12 ">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_c36c35d7-7a6f-4108-86ec-4451a17ec151.v1.png"   alt="">
                <p class="shopping ">Furniture</p>
            </div>
            <div class="col-1 septizer controller-12">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_c07e4bfc-6a34-4d51-9167-c6f84f45aa95.v1.png"   alt="">
                <p class="shopping ">Fashion</p>
            </div>
            <div class="col-1 septizer controller-12  ">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_4646f61b-a14a-42d3-ba04-befefa24d967.v1.png"      alt="">
                <p class="shopping ">Tech</p>
            </div>
            <div class="col-1 septizer">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_e39033d8-6523-4ee6-9cc3-67c2baf667d5.v1.png"   alt="">
                <p class="shopping ">Baby</p>
            </div>

            <div class="col-1 septizer ">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_5c8044b6-cd62-4615-86fa-8b20acb71786.v1.png" alt="">
                <p class="shopping ">Toys</p>
            </div>
            <div class="col-1 septizer septizer-2">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_d07759dd-36d5-4f1e-822b-de3b43b3583f.v1.png"    alt="">
                <p class="shopping ">Health</p>
            </div>
            <div class="col-1 septizer septizer-1">
                <img src="http://127.0.0.1:5500/public/imges/Walmart%20_%20Save%20Money.%20Live%20better._files/k2-_f947ef1f-52fe-461a-9e0a-0c91b35ca076.v1.png"  alt="">
                <p class="shopping ">Beauty</p>
            </div>

        </div>
    </div>
    <div class="container-fluid mx-lg-3">
        <h5 class="fs-4" style="font-weight: 700;">Fiesta-ready finds</h5>
        <p class="mx-1 mb-5 mb-lg-1" style="font-size: 13px;color: rgb(128, 120, 120);">Food & more for your celebration.
        </p>
        <div class="row">
            <div class="col-6 ml-5">
                <div class="row">
                    <div class="col-4 waracih align-items-center py-lg-4">
                        <img class="w-75 h-50 mt-lg-4 "
                            src="https://i5.walmartimages.com/asr/d2597a44-5123-42d8-a252-5cb8a9e60102.744c9356a10116cb282314b4c85a2f0c.jpeg?odnHeight=320&odnWidth=320&odnBg=FFFFFF"
                            alt="">
                        <h6 class=" mx-3 my-2" style="font-weight: 800;">$5.97</h6>
                        <p class="mx-3 security">Better Homes & Garden Salted
                            Coconut and Mahogany Scente</p>
                        <button class="px-3 my-2 mx-3" style="border-radius: 23px;">Option</button>
                    </div>  
                    <div class="col-4 counter  align-items-center  py-lg-4 my-lg-3">
                        <img class="w-75 dta-candle "
                            src="http://i5.walmartimages.com/seo/Great-Value-Taco-Shells-4-6-oz-12-Count_785b3fd3-fb19-469b-823b-21681d4a9e39.2c9a40123964aecbdce88596b2c86357.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                            alt="">
                        <h6 class=" mx-3 mt-4" style="font-weight: 800;">$15.97</h6>
                        <p class="mx-3 security">Mainstays 3 Wick Textured
                            Wrap Cranberry mandarin Candle</p>
                        <button class="px-3 my-1 mx-3" style="border-radius: 23px;">Option</button>
                    </div>
                    <div class="col-4 counter-less  align-items-center  py-lg-4 my-lg-3">
                        <img class="w-75 h-lg-100"
                            src="https://i5.walmartimages.com/seo/Old-El-Paso-Taco-Seasoning-Mix-Original-Flavor-1-oz_a66ee4ca-72d1-490f-a4d6-26eede644ee8.374f8b723fba59f094ee1295eba870be.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                            alt="">
                        <h6 class=" mx-3 mt-lg-5 mt-1" style="font-weight: 800;">$15.97</h6>
                        <p class="mx-3 security ">Mainstays 3 Wick Textured
                            Wrap Cranberry mandarin Candle</p>
                        <button class="px-3 my-1 mx-3" style="border-radius: 23px;">Option</button>
                    </div>
                </div>
            </div>
            <div class="col-5 volunteer-123 position-relative ">
                <h6 class=" position-absolute wently">Pickup & Delivery in as fast as 1 Hour</h6>
                <h2 class="position-absolute  d-lg-inline d-none ">All Set For Cinco de Mayo</h2>
                <button class="position-absolute wently-12 px-3">Shop Now</button>
                <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-ceed/k2-_31b24296-d552-4fa3-87a4-6281fda87a27.v1.jpg?odnHeight=894&odnWidth=1588&odnBg=&odnDynImageQuality=70"
                    alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid mx-3 py-lg-3">
        <h3 style="font-weight: 700;">Save on toys & games</h3>
        <p>Up to 25% off</p>
        <div class="row py-4 d-flex flex-wrap">
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Kids-Tent-Play-Tents-Toddler-Large-Pink-Girls-Princess-Playhouse-Castle-Windows-Clouds-Ball-Lights-Children-Indoor-Outdoor-Games-47-2-L-x-39-4-W-x-51_43b1b751-e09f-4711-a1ce-2f4810c2c1f8.44d6b7aab1ed7fa8d59e732da293566f.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/asr/dcadd31a-bf01-40d5-baba-72e34b01c82d.77bfef8bbe1b235fe89344b8e289314a.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12 ">
                <img src="https://i5.walmartimages.com/asr/8996f497-f0fd-454c-ac0f-80dd8e8ad1a0.e061133f65ceec1da99eac2349b8116b.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Gymax-Kids-Pedal-Go-Kart-4-Wheel-Ride-On-Toys-w-Adjustable-Seat-Handbrake-Green_5657e644-97af-47bc-9885-ef224d659a8a.b19c4884e8e26917a0fd40457afd06f2.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12 ">
                <img src="https://i5.walmartimages.com/seo/Costway-Kids-Bed-Tent-Play-Tent-Portable-Playhouse-Twin-Sleeping-w-Carry-Bag-Blue_6c21e00d-c9a5-4dce-8e90-80d0b81525e7.966562d4a5728e017b889cd2ec1fb2e5.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller">
                <img src="https://i5.walmartimages.com/asr/0e29b987-ab3e-4dde-b0f3-149c0765cbb1.898965e1145c056a24db43cb67236e63.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
        </div>
    </div>
    <div class="container-fluid celebration mx-lg-3">
        <div class="row">
            <div class="col-5 diaster ">
                <h5 class=" position-absolute mt-4 fw-bold  concret absolute" style="color: #001e60;">Mother's Day may 11</h5>
                <h1 class=" position-absolute mt-md-5 fw-bolder w-25 concret d-none d-lg-inline " style="color: #001e60;">Gifts For Mom $25
                    &
                    under </h1>
                <img class="verse"
                    src="https://i5.walmartimages.com/dfw/4ff9c6c9-d814/k2-_7e029b6b-f0f8-4fa1-bac0-544b7a6fe7ef.v1.jpg?odnHeight=1316&odnWidth=1316&odnBg=&odnDynImageQuality=70"
                    alt="">
            </div>
            <div class="col-3 complement">
                <h4 class=" position-absolute mt-4  fw-bolder mx-4" style="color: #001e60; letter-spacing: -1px;">
                    For Fashion-forward moms </h4>
                <a href="" class=" d-none d-lg-inline text-decoration-underline  position-absolute nav-link mx-4"
                    style="margin-top: 4%;">Shop Gifts</a>
                <img class="verse-123"
                    src="https://i5.walmartimages.com/dfw/4ff9c6c9-41c9/k2-_b3e93be5-f2bf-49e8-9581-1dbfac99bd3a.v1.jpg?odnHeight=584&odnWidth=1024&odnBg=&odnDynImageQuality=70"
                    alt="">
                <div class="row my-3">
                    <div class="col-7">
                        <h2 class=" position-absolute controvocy mt-4  fw-bolder mx-4"
                            style="     max-width: 107px; color: #001e60;">
                            Tech Gifts For mom </h2>
                        <a href="" class=" d-none d-lg-inlineposition-absolute  mx-4  text-decoration-underline text-dark"
                            style="margin-top: 6%;">Shop Now</a>
                        <img class="sec-000"
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-bfa2/k2-_3fd16dcf-1fae-4e82-8913-b73527d373a7.v1.jpg?odnHeight=684&odnWidth=496&odnBg=&odnDynImageQuality=70"
                            alt="">
                    </div>
                    <div class="col-3 mx-lg-3 waste">
                        <h2 class=" controvocy position-absolute mt-4  fw-bolder mx-4 " style="max-width: 163px; color: #001e60;">
                            Pools & spac </h2>
                        <a href="" class=" position-absolute  mx-4  text-decoration-underline text-dark"
                            style="margin-top: 6%;">Shop Now</a>
                        <img class="sec-000"
                            src="https://i5.walmartimages.com/dfw/4ff9c6c9-e602/k2-_9abafc5a-672c-4d1d-8b6c-8fdea22cc40c.v1.jpg?odnHeight=684&odnWidth=496&odnBg=&odnDynImageQuality=70"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-3 walmartpostion">
                <h4 class=" position-absolute mt-4 mx-4 fw-bolder" style="color: #001e60; letter-spacing: -0.41px;">
                    For Beauty loving mom </h4>
                <a href="" class="nav-link text-decoration-underline position-absolute mt-5 mx-4  "
                    style="font-size: 14pz;">Shop Now</a>
                <img class="walmart-image"
                    src="https://i5.walmartimages.com/dfw/4ff9c6c9-d9d7/k2-_1e1e0b4a-2ad0-40de-bc1b-289030d59e4c.v1.jpg?odnHeight=1316&odnWidth=770&odnBg=&odnDynImageQuality=70"
                    alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid mx-3 py-lg-3">
        <h3 style="font-weight: 700;">More For Mom</h3>
        <p>Go on, she definitely deserves it.</p>
        <div class="row py-4 d-flex flex-wrap">
            <div class="col-2 collage-life controller-12">
                <img src="https://i5.walmartimages.com/asr/2ba7e16b-f571-450c-b20a-d14b3430f1f6.7c80f8d4c47945b1c5db1e7da552e9af.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12">
                <img src="https://i5.walmartimages.com/seo/Dearfoams-Cozy-Comfort-Women-s-Mama-Bear-Scuff-Slippers_e37fc8d7-5c11-4c95-a3a6-f4bfc9799ea3.931333b8ebb0a4f95df2ba9f042f8ac9.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $19.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Time-Tru-Women-s-Hazel-Satchel-Bag-Seafoam_ea9d2b5e-aba1-4165-a086-0ac4ef73bdae.7d6c89a40f1e368b391967287b931a70.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $97.19</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Cate-Chloe-Ariel-18k-White-Gold-Plated-Halo-Stud-Earrings-with-Simulated-Diamond-Crystals-for-Women_4d9dfcaa-a423-453a-be8c-0f79b6849821.c1901296ae6e0a140e8109832ce40190.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $138.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/asr/ea7f786c-5e68-4782-8769-779d15b15bb8.f7ababc99637fff2cb81a0a36cf7e720.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $18.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller">
                <img src="https://i5.walmartimages.com/seo/PAVOI-14K-Yellow-Gold-Plated-925-Sterling-Silver-Stackable-CZ-Ring-Women-Thin-Band-Stacking-Simulated-Diamond-Eternity-Wedding-Size-7_f69bfa95-e473-4d32-90ae-79b3675c8d4a.34ff4058f443a5a57fb6e9ed648464fe.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $118.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-3 py-lg-5 border-top">
        <h5 style="font-weight: 700;">Popular in computer parts, printers & accessories</h5>
        <div class="row py-4 d-flex flex-wrap">
            <div class="col-2 collage-life controller-12">
                <img src=" https://i5.walmartimages.com/seo/HP-67XL-High-Yield-Black-Original-Ink-Cartridge-240-Pages-3YM57AN-140_2bf9a0f2-6972-4f8f-82bb-5d5e5db8d1a6.078a187a259ed5050859d50744b099ad.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life controller-12">
                <img src="https://i5.walmartimages.com/asr/7bb2f3c0-5642-4288-a9b4-e1ec985e32f4.4bb02f247cd82b22930673c21453cc0d.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $18.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/asr/399061b2-3950-404b-8aed-401b2f89c54f.46ca139d3b46371c846c55c39844cfba.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $19.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Logitech-Wireless-Keyboard-Mouse-Combo-Windows-2-4-GHz-Wireless-Compact-Mouse-8-Multimedia-Shortcut-Keys-2-Year-Battery-Life-PC-Laptop_cfc8d611-21fd-4274-b14c-5c38fe8a857f.820e5ebd0a707b47e16a32413805085c.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $97.19</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/asr/1588420a-43f2-4a7d-9466-8f26574fe439.0f45a0f94aaec6d674ae2635f54b029d.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $138.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>

            <div class="col-2 collage-life controller">
                <img src="https://i5.walmartimages.com/seo/Restored-Apple-13-3-MacBook-Air-Intel-Core-i5-Silver-8GB-RAM-128GB-SSD-Mid-2017-Refurbished_f28faa9e-4b08-41e7-81f1-fd68d48dad7e.e577fa940267b6a0366111bf019740f1.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $118.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-3 py-lg-5 border-top">
        <h5 style="font-weight: 700;">From Becky G & Algendra</h5>
        <p>A new home collab by Mainstays.</p>
        <div class="row py-4 d-flex flex-wrap">
            <div class="col-2 controller-12 collage-life">
                <img src="https://i5.walmartimages.com/seo/MS-BG-MEL-12PC-GRN_7cd0e32b-bdf5-489b-92d1-33dc584b3919.f5738dfb0e1df3ef27b0ca9efcb7b493.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $78.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 controller-12 collage-life">
                <img src="https://i5.walmartimages.com/asr/19dbc84e-2a74-4803-838d-617e13d523c3.d6f59b1baf91f6616293f089387dcf4f.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $18.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/asr/29204234-de91-472d-b472-5b3d058afa7f.28148c7009dd62391473e2a1539be524.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $19.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src=" https://i5.walmartimages.com/seo/Mainstays-by-Becky-G-Alejandra-14-Ounce-Acrylic-Short-Stripe-Line-Tumbler-Green_c0c21a4e-2683-4e31-97a0-fda38f23e056.cf7a80ed39db50e0bee079ea4bcdf903.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $97.19</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
            <div class="col-2 collage-life">
                <img src="https://i5.walmartimages.com/seo/Mainstays-by-Becky-G-Alejandra-Bamboo-Melamine-Dinner-Bowl-Lemon-Green_fce85b54-041f-45de-a455-27e081cff6fc.f5b4e30e0a9a5755e9ed5ffb1fd0eb28.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $138.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>

            <div class="col-2 collage-life controller">
                <img src="https://i5.walmartimages.com/seo/Mainstays-by-Becky-G-Alejandra-14-5-Artificial-Lemon-Tree-in-White-Ceramic-Vase_8632886c-878e-407f-aff6-323e27ed85bd.6b4de062e69d2ff746a42b225f0f4343.jpeg?odnHeight=350&odnWidth=350&odnBg=FFFFFF"
                    alt="">
                <h4 class="sweater mt-lg-3">From $118.89</h4>
                <p class="motor">INSE 32kpa Cordless Vacuam Cleaner With Brushless Motor,</p>
                <button class="px-3" style="border-radius: 23px;">Options</button>
            </div>
        </div>
    </div>
    <div class="container-fluid w-100 pb-3 pt-3 sent">
        <div class="row">
            <p class=" text-center  ">We’d love to hear what you think!</p>
            <button class=" mx-auto bg-white py-2 fw-bolder" style="border-radius: 23px; width: 165px;">Give
                FeedBack</button>
        </div>
    </div>
    <div class="container-fluid condation">
        <div class="row">
            <ul class="nav justify-content-center py-4 w-75 m-auto">
                <a href="" class="nav-link text-white">All Departments</a>
                <a href="" class="nav-link text-white">Store Directory</a>
                <a href="" class="nav-link text-white">Careers</a>
                <a href="" class="nav-link text-white">Our Company</a>
                <a href="" class="nav-link text-white">Sell on Walmart.com</a>
                <a href="" class="nav-link text-white">Help</a>
                <a href="" class="nav-link text-white">Product Recalls</a>
                <a href="" class="nav-link text-white">Accessbility</a>
                <a href="" class="nav-link text-white">Tax Exempt Program</a>
                <a href="" class="nav-link text-white">Get the Walmart App</a>
                <a href="" class="nav-link text-white">Safety Data Sheet</a>
                <a href="" class="nav-link text-white">Terms of use </a>
                <a href="" class="nav-link text-white">Privacy Notic</a>
                <a href="" class="nav-link text-white">California Supply Chain Act</a>
                <a href="" class="nav-link text-white">Your Privacy Choices</a>
                <a href="" class="nav-link text-white">Notics at collection</a>
                <a href="" class="nav-link text-white">Adchoises</a>
                <a href="" class="nav-link text-white">Consumer Health Data Privacy Notices</a>
                <a href="" class="nav-link text-white">Brand Shop Directory</a>
                <a href="" class="nav-link text-white">Pharmacy</a>
                <a href="" class="nav-link text-white">Walmart Business</a>
                <a href="" class="nav-link text-white">#IYWYK</a>
                <a href="" class="nav-link text-white">Delete Account</a>
            </ul>
            <p class=" text-center text-white " style="font-size: 12px;">© 2025 Walmart. The trademarks Walmart and the
                Walmart Spark design are registered with the US Patent and Trademark
                Office. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>