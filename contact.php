<?php include_once '_include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 adresa">
            <h3>Kontaktujte nás</h3>
            <address>
                <strong>Penzión</strong><br>
                Ulica 267<br>
                93529, Horná Dolná<br>
                Slovenská Republika<br>
            </address>

            <table class="table">
                <tbody>
                    <tr>
                        <td><i class="fa fa-phone" aria-hidden="true"></i> Telefónne číslo:</td>
                        <td class="stats">+421 912 654 125</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope" aria-hidden="true"></i> Email:</td>
                        <td class="stats">info@penzion.sk </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-globe" aria-hidden="true"></i> Web:</td>
                        <td class="stats"><a href="#">www.penzion.sk</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 col-md-offset-1 form">
            <h3>Napíšte nám</h3>
            <div class="form-group">
                <input class="contact-input" placeholder="Meno" required id="meno" name="Meno" />
            </div>
            <div class="form-group">
                <input class="contact-input" placeholder="Email" required id="email" name="Email" />
            </div>
            <div class="form-group">
                <input class="contact-input" placeholder="Predmet" required id="meno" name="Predmet" />
            </div>
            <div class="form-group">
                <textarea class="contact-textarea" type="textarea"  placeholder="Vaša správa"  rows="4"></textarea>
            </div>
            <button type="button" class="btn btn-default pull-right sendmessage">Odošli správu</button>
        </div>
    </div>
    <div class="row gallery">
        <div class="gallery-photo col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
            <img src="images/slide/contact_foto_1.jpg" class="img-responsive">
        </div>
        <div class="gallery-photo col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
            <img src="images/slide/contact_foto_2.jpg" class="img-responsive">
        </div>
        <div class="gallery-photo col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
            <img src="images/slide/contact_foto_3.jpg" class="img-responsive">
        </div>
        <div class="gallery-photo col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
            <img src="images/slide/contact_foto_4.jpg" class="img-responsive">
        </div>
    </div>
</div>

<?php include_once '_include/footer.php'; ?>
