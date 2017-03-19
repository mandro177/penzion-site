<?php include_once '_include/header.php'; ?>

   <br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kniha návštev</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Návštevy</a></li>
                            <li><a href="#tab2" data-toggle="tab">Podpísať sa</a></li>
                            <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                           
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                       
                        <h4>  <i class="ion-android-contacts" style="font-size:40px;color:#a6a6a6"></i><b> &nbsp;Prezrite si, čo o nás povedali naši klienti...</b></h4>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"
                        <br>
                        
                        <hr>
<table id="knihanavstev" class="display" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>Meno</th>
                <th>Dátum</th>
                <th>Komentár</th>
                <th></th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Menu</th>
                <th>Dátum</th>
                <th>Komentár</th>
                <th></th>
              
                
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Peter Kováč</td>
                <td>5.5.2016</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>

                <tr>
                <td>Jana Malá</td>
                <td>5.6.2016</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>

                <tr>
                <td>Marek Mach</td>
                <td>5.7.2016</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>
           
           
                       
        </tbody>
    </table>
                            
                        </div>
                        <div class="tab-pane" id="tab2">
                        <h4>  <i class="fa fa-comments" style="font-size:40px;color:#a6a6a6"></i><b> &nbsp; Podpíšte sa do našej virtuálnej knihy návštev a povedzte svoj názor ostatným...</b></h4>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"
                        <br>
                            <div class="col-md-12 col-lg-12" style="margin-bottom:40px">
    <div class="form-area">  
        
        <br>
        <h3 style="margin-bottom: 25px; text-align:left">Podpíšte sa</h3>
                    <div class="form-group">
                       <input class="contact-input" placeholder="Meno" required id="meno" name="Meno" />
                    </div>
                   
                    
                    <div class="form-group">
                       <input class="contact-input" placeholder="Dátum" required id="meno" name="Predmet" />
                    </div>
                    <div class="form-group">

                    <textarea class="contact-textarea" type="textarea"  placeholder="Váš komentár"  rows="4"></textarea>
                                            
                    </div>
            
        <button type="button" class="btn-default pull-right sendmessage" >Odoslať</button>
        
    </div>


</div>

                        </div>
                        <div class="tab-pane" id="tab3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Napíšte nám</h3>
                    <address>
                        <strong>Penzión</strong><br>
                        Ulica 35<br>
                        Horná Dolná<br>
                        265 45<br><br>
                        +421 912 654 125<br>
                        info@penzion.sk
                    </address>
                </div>
                <div class="col-md-6">
                    <h3>Nájdete nás</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2410.475031427031!2d18.076836427265473!3d48.30150022749602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6920fd1ded6b2dd0!2sPenzi%C3%B3n+Premona!5e0!3m2!1ssk!2ssk!4v1489692812989" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<?php include_once '_include/footer.php'; ?>
