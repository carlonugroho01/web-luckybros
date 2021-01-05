<?php
include_once 'header.php';
include 'conn.php';
if (isset($_POST['sendMessageButton'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (`name`, `email`, `phone`,`message`)
        VALUES ('$name', '$email', '$phone','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message succesfully sent!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Auction Store!</div>
        <div class="masthead-heading text-uppercase">Throw your bid and grab your bits</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#home">Explore Now</a>
    </div>
</header>
<!-- Home-->
<section class="page-section" id="home">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Home</h2>
            <h3 class="section-subheading text-muted">Bidding has never been this easy.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Find</h4>
                <p class="text-muted">find items that you are interested in buying in the store</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-money-bill-wave fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Bid</h4>
                <p class="text-muted">enter the nominal of your offer according to the terms and conditions applied to each item</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-truck-loading fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Win</h4>
                <p class="text-muted">If your bid nominal is the highest price when the auction is closed then you are entitled to get the item according to the price you entered</p>
            </div>
        </div>
    </div>
</section>
<!-- Product Grid-->
<section class="page-section bg-light" id="products">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Products</h2>
            <h3 class="section-subheading text-muted">here's our product lines.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/thumbnail-air-max.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Shoes</div>
                        <div class="portfolio-caption-subheading text-muted">Nike Air Max 97 Mettalic Gold</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/thumbnail-supreme-bag.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Waistbags</div>
                        <div class="portfolio-caption-subheading text-muted">Supreme Mass Fany Pack Waistbag</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/gucci-jacket.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Jackets</div>
                        <div class="portfolio-caption-subheading text-muted">Gucci Denim Jacket with Embroidery</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/rolex-watch.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Watches</div>
                        <div class="portfolio-caption-subheading text-muted">Rolex Submarine Hulk Watch</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/assc-hat.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Hats</div>
                        <div class="portfolio-caption-subheading text-muted">Anti Social Social Club Black Cap</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/off-white.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">T-Shirts</div>
                        <div class="portfolio-caption-subheading text-muted">Off White Kaws Black T-Shirt</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Testimonials</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/jessica-lim.jpg" alt="" />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Jessica Lim</h4>
                        <h4 class="subheading">"Revolutionary Method"</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/max-steppen.jpg" alt="" />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Max Steppen</h4>
                        <h4 class="subheading">"Trustworthy Service"</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/natasha-gould.jpg" alt="" />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>Natasha Gould</h4>
                        <h4 class="subheading">"Great Item Line Ups"</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                            voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                            unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">The Amazing Team</h2>
            <h3 class="section-subheading text-muted">"The strength of the team is each individual member. The strength of each member is the team."</h3>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/carlo.png" alt="" />
                    <h4>Carlo Nugroho</h4>
                    <p class="text-muted">Project Lead</p>
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/CarloNugroho" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/lionel_carlo/?hl=id" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/carlonugroho/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Feel free to leave a message to get more information.</h3>
        </div>
        <form class="contact-form" action="index.php" method="post">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <input class="btn btn-primary btn-xl text-uppercase" name="sendMessageButton" type="submit"></input>
            </div>
        </form>
    </div>
</section>

<?php
include_once 'footer.php';
?>