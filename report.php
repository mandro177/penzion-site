<?php include_once '_include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 report">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Kniha návštev</h3>
                    <ul class="nav panel-tabs pull-right">
                        <li class="active"><a href="#tab1" data-toggle="tab">Návštevy</a></li>
                        <li><a href="#tab2" data-toggle="tab">Podpísať sa</a></li>
                        <li><a href="#tab3" data-toggle="tab">TOP hodnotenia</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <h4><i class="ion-android-contacts" style="font-size:40px;color:#a6a6a6"></i><b> &nbsp;Prezrite si, čo o nás povedali naši klienti...</b></h4>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <cite title="Bob Maximus">- Bob Maximus</cite>
                            </blockquote>
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
                                <tfoot>
                                    <tr>
                                        <th>Menu</th>
                                        <th>Dátum</th>
                                        <th>Komentár</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <h4>  <i class="fa fa-comments" style="font-size:40px;color:#a6a6a6"></i><b> &nbsp; Podpíšte sa do našej virtuálnej knihy návštev a povedzte svoj názor ostatným...</b></h4>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <cite title="Bob Maximus">- Bob Maximus</cite>
                            </blockquote>
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
                                    <button type="button" class="btn btn-default pull-right sendmessage" >Odoslať</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <h4>  <i class="ion-ribbon-b" style="font-size:40px;color:#a6a6a6"></i><b> &nbsp; Prezrite si naše najlepšie hodnotenia...</b></h4>
                        <blockquote>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </blockquote>
                        <br>
                        
                        <div class="row">
        <div class="col-md-4 ">
            <div class="cit">
                <div class="active item">
                  <blockquote><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p></blockquote>
                  <div class="obsah">
                    <img alt="" src="images/slide/face1.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="cit_meno">Jozef K.</span>
                      <span class="cit_post">Manažér</span>
                    </div>
                  </div>
                </div>
            </div>


        </div>
        
         <div class="col-md-4 ">
            <div class="cit">
                <div class="active item">
                  <blockquote><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p></blockquote>
                  <div class="obsah">
                    <img alt="" src="images/slide/face2.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="cit_meno">Jana K.</span>
                      <span class="cit_post">Web developer</span>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 ">
            <div class="cit">
                <div class="active item">
                  <blockquote><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p></blockquote>
                  <div class="obsah">
                    <img alt="" src="images/slide/face3.jpg" class="pull-left">
                      <span class="cit_meno">Dana D.</span>
                      <span class="cit_post">Účtovníčka</span>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            

        </div>
    </div>
</div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '_include/footer.php'; ?>
