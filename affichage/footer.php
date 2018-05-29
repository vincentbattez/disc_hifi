<footer class="footer">
    <div class="container-fluid">
        <div class="container">
            <div class="footer-magasin-toggle">
            <?php
                // if(ShopOpen() === true){ //Magasin ouvert
                    // echo'<button type="button" class="btn btn-principal m-ouvert open_magasin">Magasin ouvert</button>';}
                // else{ //Magasin fermé
                    // echo'<button type="button" class="btn btn-principal m-ferme open_magasin">Magasin fermé</button>';}
             ?>
             <button type="button" class="btn btn-principal open_magasin">Magasin Ouvert</button>
         </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footer-flex-left">
                    <div class="footer-contact">
                        <h3>Contact</h3>
                        <ul>
                            <li>07.58.77.99.10</li>
                            <li>40 rue du mont neuf</li>
                            <li>Boulogne-sur-mer</li>
                        </ul>
                        <button type="button" class="btn btn-secondary open_magasin" role="button">Me contacter</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footer-flex-right">
                    <div class="footer-magasin">
                        <h3>Le magasin</h3>
                        <ul>
                            <li>Ouvert du mardi au samedi :</li>
                            <li>10h - 12h | 15h - 19h</li>
                        </ul>
                            <button type="button" class="btn btn-secondary open_magasin" role="button">Le magasin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-footer">
        <div class="footer-copyright">
            <span>2016 &copy; Disc-Hifi</span>
        </div>
        <div class="footer-social">
            <ul>
                <a href="https://www.facebook.com/Disc-Hifi-1402362486688177/?fref=ts" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
            </ul>
        </div>
    </div>
</footer>
<!---__________________-VARIABLES-__________________--->
<div class="_var">
        <span id="_MagasinOuvert" variable="<?php echo ShopOpen() ? 'true' : 'false'; ?>"></span>
</div>
<?php
include_ONCE 'divers/script.php'; //////////Script
?>
</body>
</html>
