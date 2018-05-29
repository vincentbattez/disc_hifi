$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({
            scrollTop: $(page).offset().top - 60
        }, speed); // Go
        return false;
    });

    //____________________________________________________________________________________________________________-  _VAR
    var _MagasinOuvert = $('#_MagasinOuvert').attr('variable');



    //____________________________________________________________________________________________________________-  _MagasinOuvert BUTTON
    if (_MagasinOuvert == 'false')
        $('.footer-magasin-toggle button').html('Magasin fermé').addClass('m-ferme');


    //____________________________________________________________________________________________________________-PARALAX
    var heightHeader = $("header.header").height();
    $(window).scroll(function(event) { // Quand je Scrool
        var wScroll = $(this).scrollTop(); // récupère le scroll
        if (window.matchMedia("(min-width: 1024px)").matches && heightHeader > wScroll) {
            $('h1').css('transform', 'translateY(' + -wScroll / 6 + '%)');
            $('.header').css('background-position', '0px ' + wScroll / 4 + 'px');
        } else {
            /* L'affichage est inférieur à 1024px de large */
            $('h1').css('transform', 'translateY(0px)');
            $('.header').css('background-position', '0px 0px');
        }
    });
    //____________________________________________________________________________________________________________-MAGASIN MODAL
    //OPEN
    $('.open_magasin').on('click', function(event) {
        event.preventDefault();
        var modalMagasin = `
                <aside id="info_magasin" class="modal">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 modal-magasin">
                                <span class="exit"><i class="fa fa-times" aria-hidden="true"></i></span>
                                <h2>Coordonnées</h2>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="modal-coordonnee">
                                        <ul>
                                            <li>
                                                <strong>Adresse</strong> : <br>
                                                <span class="modal-rue">64 grande rue</span>,<br>
                                                <span class="modal-postal">62200</span>,
                                                <span class="modal-ville">Boulogne-sur-mer</span>
                                            </li>
                                            <li>
                                                <strong>Téléphone</strong> : <br>
                                                <span class="modal-phone">03.21.31.77.90</span>
                                            </li>
                                            <li>
                                                <strong>Horaires</strong> : <br>
                                                <span class="modal-day">Mardi au samedi</span> <br>
                                                <span class="modal-hours">10h - 12h / 15h - 19h</span>
                                            </li>
                                        </ul>
                                        <div id="cibleMagasinStatus"></div>
                                            </div>
                                            <div class="col-xs-0 col-sm-0 col-md-6 col-lg-6" id="modal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.7664829278915!2d1.6072389157413396!3d50.72427127951407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c45cb97918d%3A0xe5bf046149f863b1!2sDisc-Hifi!5e0!3m2!1sfr!2sfr!4v1482892297659"  width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <form class="form-inline" action="#" method="POST">
                                                <div class="form-group">
                                                    <label for="prenom">Prénom *</label>
                                                    <input type="prenom" class="form-control" id="prenom" name="prenom" placeholder="Vincent">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nom">Nom *</label>
                                                    <input type="nom" class="form-control" id="nom" name="nom" placeholder="Battez">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tel">Numéro de téléphone *</label>
                                                    <input type="text" class="form-control" id="tel" placeholder="06.58.99.71.10">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="exemple@messagerie.fr">
                                                </div>
                                                <div class="form-group message">
                                                    <label for="message">Message *</label>
                                                    <textarea class="form-control" id="message" name="message" placeholder="Votre message"></textarea>
                                                </div>
                                                <div class="submitMessage">
                                                    <button type="submit" class="btn btn-principal pull-right">Envoyer</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </aside>`;
        $('body').append(modalMagasin);
        animation('.modal-magasin', 'zoomIn', 1000);
        $('.footer-magasin-toggle button').clone().appendTo('#cibleMagasinStatus');
    });
    //CLOSE
    $('body').on('click', '#info_magasin .overlay, #info_magasin .exit', function(event) {
        animation('#info_magasin', 'fadeOut', 1000, 'remove');
        animation('.modal-magasin', 'zoomOut', 1000);
    });
    //____________________________________________________________________________________________________________-FILTER MODAL
    //OPEN
    $('span.filter').on('click', function(event) {
        event.preventDefault();
        var modalFilter = `
            <aside id="filter_modal" class="modal">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 modal-filter">
                            <span class="exit"><i class="fa fa-times" aria-hidden="true"></i></span>
                            <form class="" action="index.html" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="modal-selector">
                                        <label for="marques">Marques</label>
                                        <label for="couleur">Couleur</label>
                                        <label for="puissance">Puissance</label>
                                        <br>
                                            <select id="marques" name="marque">
                                                  <option selected value="allMarque">Toutes les marques</option>
                                                  <option value="bose">Bose</option>
                                                  <option value="sony">Sony</option>
                                                  <option value="edifier">Edifier</option>
                                            </select>
                                            <select id="couleur" name="couleur">
                                                  <option selected value="allCouleur"></option>
                                                  <option value="noir">noir</option>
                                                  <option value="blanc">blanc</option>
                                                  <option value="rouge">rouge</option>
                                            </select>
                                            <select id="puissance" name="puissance">
                                                  <option selected value="allPuissance"></option>
                                                  <option value="10">10W</option>
                                                  <option value="100">100W</option>
                                                  <option value="200">200W</option>
                                            </select>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="modal-checkbox">
                                            <div class="checkbox">
                                                <input type="checkbox" name="promo" id="promo">
                                                <label for="promo">Promotion <i class="fa fa-times cross_checkbox" aria-hidden="true"></i></label>
                                            </div>
                                        </div>
                                    </div>
                            </form>

                        </div>
                    </div>
                </aside>`;
        $('body').append(modalFilter);
        animation('.modal-filter', 'zoomIn', 1000);
    });
    //CLOSE
    $('body').on('click', '#filter_modal .overlay, #filter_modal .exit', function(event) {
        animation('#filter_modal', 'fadeOut', 1000, 'remove');
        animation('.modal-filter', 'zoomOut', 1000);
    });

}); //FIN DU SCRIPT
