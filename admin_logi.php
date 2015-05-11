<?php include 'header.php' ?>
<title>Administratiivlogi</title>
</head>
<body>
    <?php include 'admin_navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Administratiivsete muudatuste logi</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h3>&nbsp;&nbsp;Filter</h3>
            </div>
            <div class="col-md-9">
                <h3>Logi</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="control-label col-sm-12">Muudatus tehti ajavahemikul</label>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <input class="form-control" type="text" value="<aja valik>" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                    kuni
                    <input class="form-control" type="text" value="<aja valik>" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                </div>
                 
                <br>
                <label class="control-label col-sm-4">Muudatuse tegija:</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" value="<kordineerija valik>" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                </div>
                 
                <br>
                <label class="control-label col-sm-4">Muudatuse liik:</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" value="<muudatuse valik>" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                </div>
            </div>

            <!--Table -->
            <div class="col-md-9">

                <div class="panel panel-default">
                    <table class="table">

                        <thead>
                            <tr>
                                <th class="col-md-1">Muudatus</th>
                                <th class="col-md-1">Tegija</th>
                                <th class="col-md-1"><span class="glyphicon glyphicon-chevron-up"></span> Kellaaeg</th>
                                <th class="col-md-2">Selgitus</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Kandidaadi lisamine</td>
                                <td>Andreas Sepp</td>
                                <td>11.05.2015 15:21</td>
                                <td>Lisasin uue kandideerija</td>
                            </tr>
                            <tr>
                                <td>Kandidaadi muutmine</td>
                                <td>Kristjan Perli</td>
                                <td>11.05.2015 14:32</td>
                                <td>Parandasin kirjavea nimes</td>
                            </tr>
                            <tr>
                                <td>Kandidaadi kustutamine</td>
                                <td>Kristjan Perli</td>
                                <td>11.05.2015 14:12</td>
                                <td>Kustutasin duplikaadi</td>
                            </tr>
<tr>
                                <td>Kandidaadi lisamine</td>
                                <td>Kristjan Perli</td>
                                <td>11.05.2015 11:21</td>
                                <td>Lisasin uue kandideerija</td>
                            </tr>
                            <tr>
                                <td>Kandidaadi muutmine</td>
                                <td>Andreas Sepp</td>
                                <td>11.05.2015 09:32</td>
                                <td>Parandasin erakondliku kuuluvuse</td>
                            </tr>
                            <tr>
                                <td>Kandidaadi kustutamine</td>
                                <td>Andreas Sepp</td>
                                <td>11.05.2015 02:12</td>
                                <td>Kustutasin üleliigse kandidaadi</td>
                            </tr>
                            <tr>
                                <td>Staatuse muutmine</td>
                                <td>Andreas Sepp</td>
                                <td>11.05.2015 00:00</td>
                                <td>Käivitasin valimiste protsessi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
</body>
