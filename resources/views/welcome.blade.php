<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Barbearia Seu Pedro</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Inclusao do Full Calendar-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="#page-top">Seu Pedro</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    {{-- <li class="nav-item"><a class="nav-link" href="#about">Endereço</a></li> --}}
                    <li class="nav-item "><a class="nav-link text-white" href="#adress">Endereço</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#projects">Sobre</a></li>

                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <!-- <h1 class="mx-auto my-0 text-uppercase">Seu Pedro</h1> -->
                    <img viewBox="0 0 316 316" class="w-30 h-23 fill-current text-gray-500" src="img/LOGO.png"
                        width="450" height="450">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">O RESGATE DO CORTE COM ESTILO.</h2>
                    <a class="btn btn-light" href="{{ url('/dashboard') }}">Agendar Horário</a>
                    {{-- <a class="btn btn-primary" href="{{ route('login') }}">Entrar</a> --}}
                </div>
            </div>
        </div>
    </header>

    <section class="about-section text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-scissors fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3 text-white-50" >Cortes</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam architecto quo inventore harum ex magni, dicta impedit.</p>

                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="far fa-clock fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3 text-white-50">Funcionamento</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam architecto quo inventore harum ex magni, dicta impedit.</p>

                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-search-location fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3 text-white-50">Estabecimento</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
                            quam architecto quo inventore harum ex magni, dicta impedit.</p>

                    </div>

                </div>

            </div>


        </div>

        </div>
    </section>


    <!-- Services-->
    <section class="page-section" id="services">

        <!-- About-->
        <section class="about-section text-center" id="adress">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <i class="fas fa-map-marked-alt fa-2x mb-2 text-white"></i>

                        <h2 class="text-white mb-4" >Endereço:</h2>
                        <p class="text-white-50">
                            R. Dom Alfredo Ernesto Novak - Praia de Leste, Pontal do Paraná - PR, 83255-000
                            <a href="https://goo.gl/maps/Cpga382bzbHJioHM7">Aperta aqui que eu te mostro o caminho</a>
                        </p>


                    </div>
                </div>
                {{-- <img class="img-fluid" src="assets/img/ipad.png" alt="..." /> --}}
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-6 col-lg-5"><img class="img-fluid mb-4 mb-lg-0" src="/img/pedro.jpg"
                            alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Seu Pedro</h4>
                            <p class="text-black-50 mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Eligendi voluptates, incidunt tempore obcaecati, similique voluptas doloremque nemo
                                praesentium consectetur beatae, voluptatibus omnis? Magnam aut ipsa, culpa tenetur
                                dolores repellat numquam?</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/corte.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Atendimento</h4>
                                    <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Id, animi alias! Cumque, itaque qui. Voluptatem culpa voluptas explicabo
                                        ea soluta. Commodi porro veniam earum nulla saepe? Saepe aspernatur in rem!.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/foto1.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Qualidade</h4>
                                    <p class="mb-0 text-white-50">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Ipsum voluptatem recusandae accusantium quibusdam modi molestias, culpa ab
                                        molestiae fugiat dolor beatae delectus facilis doloremque. Deserunt omnis
                                        veritatis eligendi odio sed?</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        {{-- <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email"
                                        placeholder="Enter email address..." aria-label="Enter email address..."
                                        data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton"
                                        type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is
                                required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not
                                valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fab fa-instagram text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Instagram</h4>
                                <hr class="my-4 mx-auto" />
                                <a href="https://www.instagram.com/barbeariaseupedro/">Veja meus cortes no Insta</a>
                                <div class="small text-black-50">@barbeariaseupedro</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Whatsapp</h4>
                                <hr class="my-4 mx-auto" />
                               <a href="https://api.whatsapp.com/send?phone=4195660730&text=Sua%20mensagem%20vai%20aqui.">Mandar um whats ai po</a>
                                <div class="small text-black-50">(41) 9566-0730</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefone</h4>
                                <hr class="my-4 mx-auto" />
                                <a href="tel:4195660730">Se preferir pode me ligar</a>
                                <div class="small text-black-50">(41) 9566-0730</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div> --}}
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy;  Barbearia seu Pedro 2022</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
