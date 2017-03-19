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
                <td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>

                <tr>
                <td>Jana Malá</td>
                <td>5.6.2016</td>
                <td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>

                <tr>
                <td>Marek Mach</td>
                <td>5.7.2016</td>
                <td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</td>

                <td>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-search" aria-hidden="true"></i></button>
                 <button type="submit" class="btn btn-circle" ><i class="fa fa-times" aria-hidden="true"></i></button>

                </td>
                </tr>
           
           
                       
        </tbody>
    </table>
                            
                        </div>
                        <div class="tab-pane" id="tab2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                        <div class="tab-pane" id="tab3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '_include/footer.php'; ?>
