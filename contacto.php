<?php require "include/header.php"; ?>
<body id="top">
    <main>
        <header class="site-header">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <h1 class="text-white">Contacto</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12 mb-lg-5 mb-3">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.6759633941356!2d-57.040518399999996!3d-26.885343399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945a2443943c023b%3A0xd416e634d777a296!2sUniversidad%20Cat%C3%B3lica%20%22Nuestra%20Se%C3%B1ora%20de%20la%20Asunci%C3%B3n%22%20(UC)!5e0!3m2!1ses!2spy!4v1680951932259!5m2!1ses!2spy" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-5 col-12 mb-3 mx-auto">
                        <div class="contact-info-wrap">
                            <div class="contact-info d-flex align-items-center mb-3">
                                <i class="custom-icon bi-building"></i>
                                <p class="mb-0">
                                    <span class="contact-info-small-title">Ubicacion</span>
                                    Ruta IV, 0150 Camino a Pilar, Teodoro Brusquetti
                                </p>
                            </div>
                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-globe"></i>
                                <p class="mb-0">
                                    <span class="contact-info-small-title">Sitio Web</span>
                                    <a href="#" class="site-footer-link">
                                        www.upsanignacio.com
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-telephone"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Telefono</span>

                                    <a href="tel: 0782-232-351" class="site-footer-link">
                                    0782 232 351
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info d-flex align-items-center">
                                <i class="custom-icon bi-envelope"></i>

                                <p class="mb-0">
                                    <span class="contact-info-small-title">Email</span>

                                    <a href="sanignacioguazu@uc.edu.py" class="site-footer-link">
                                    sanignacioguazu@uc.edu.py
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2 class="text-center mb-4">Tenes alguna Duda o consulta?</h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="first-name">Nombre Completo</label>

                                    <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Nombre y Apellido" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="email">Email</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="ejemplo@gmail.com" required>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <label for="message">Mensaje</label>

                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="En que podemos ayudarte?"></textarea>
                                </div>

                                <div class="col-lg-4 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <?php require "include/footer.php"; ?>