@extends('default')

@section('content')
    <div id="intro-wrapper" class="wrapper style1">
        <div class="title">Introduction</div>
        <section id="intro" class="container">
            <p class="style1">Au cas où vous vous demanderiez ce que nous faisons</p>
            <p class="style2">
                Viva la fiesta est une plateforme <br class="mobile-hide" /> de création et de gestion de soirée
            </p>
            <p class="style3">Principalement implantée en <strong>suisse romande</strong> cette platefrome vous permettra de créer des <strong>billets</strong> et de faire de la <strong>publicité</strong> pour <strong>vos soirées</strong></p>
            <ul class="actions">
                <li><a href="#" class="button style3 big">En savoir plus</a></li>
            </ul>
        </section>
    </div>

    <!-- Main -->
    <div class="wrapper style2">
        <div class="title">Informations</div>
        <div id="main" class="container">

            <!-- Image -->
                <a href="#" class="image featured">
                    <img src="images/pic01.jpg" alt="" />
                </a>

            <!-- Features -->
                <section id="features">
                    <header class="style1">
                        <h2>Informations générales et utilisation</h2>
                        <p>Domaines d'applications et informations sur la plateforme</p>
                    </header>
                    <div class="feature-list">
                        <div class="row">
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-comment">Foire au questions (F.A.Q)</h3>
                                    <p>Cette espace vous permettra en tout temps de nous demander <strong>informations</strong> sur la plateforme ou toutes autres chose relative à Viva la fiesta</p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-ticket">Ticket et billets pour la soirée</h3>
                                    <p>les billest des soirée ainsi que le prix du billet son fixer par le créateur de la soirée. L'achat de billet ce font par <strong>virement paypal</strong>. Les billets sont totalement personnalisables</p>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-picture-o">Gallerie photos / vidéos</h3>
                                    <p>La gellerie vous permettra de voir les photos ou vidéos des dernière soirée organiser via <strong>Viva la fiesta</strong></p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-cog">Paramétrage des soirées</h3>
                                    <p>Vous pouvez faire des modifications sur vos soirées quand vous le voulez depuis votre <strong>espace de gestion</strong></p>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-wrench">Conditions d'utilisation</h3>
                                    <p>Une fois le billets en votre posséssions vous ne pouvez plus le vendre ou le donner<strong>(Billets nominatifs)</strong>. Vous pouvez demander un rembourssement jusqu'au minimum <strong>2 semaines</strong> avant l'évenement. une fois cette date passé le billets n'est plus rembourssable sauf en cas d'annulation par le créateur</p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-check">Transactions sécuriser</h3>
                                    <p>Chaque transaction s'éffectue via <strong>paypal</strong>    ce qui nous permet d'affirmer que toutes les transactions sons sécuriser.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                    <ul class="actions actions-centered">
                        <li><a href="#" class="button style1 big">Commencer</a></li>
                        <li><a href="/conditions-generales" class="button style2 big">Conditions générales</a></li>
                    </ul>
                </section>

        </div>
    </div>

    <!-- Highlights -->
    <div class="wrapper style3">
        <div class="title">Future événement</div>
        <div id="highlights" class="container">
            <div class="row 150%">
                <div class="4u 12u(mobile)">
                    <section class="highlight">
                        <a href="#" class="image featured"><img src="images/banner.jpg" alt="" /></a>
                        <h3><a href="#">Super fiesta à la case a choc</a></h3>
                        <p>Une description de la fiesta avec les informations prinicpale et tout le blabla qui va avec</p>
                        <ul class="actions">
                            <li><a href="#" class="button style1">Voir la soirée</a></li>
                        </ul>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="highlight">
                        <a href="#" class="image featured"><img src="images/banner.jpg" alt="" /></a>
                        <h3><a href="#">Super fiesta à la case a choc</a></h3>
                        <p>Une description de la fiesta avec les informations prinicpale et tout le blabla qui va avec</p>
                        <ul class="actions">
                            <li><a href="#" class="button style1">Voir la soirée</a></li>
                        </ul>
                    </section>
                </div>
                <div class="4u 12u(mobile)">
                    <section class="highlight">
                        <a href="#" class="image featured"><img src="images/banner.jpg" alt="" /></a>
                        <h3><a href="#">Super fiesta à la case a choc</a></h3>
                        <p>Une description de la fiesta avec les informations prinicpale et tout le blabla qui va avec</p>
                        <ul class="actions">
                            <li><a href="#" class="button style1">Voir la soirée</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection