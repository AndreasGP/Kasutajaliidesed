<?php include 'header.php' ?>
<title>Kandidaadid</title>
</head>
<body>
    <?php include 'admin_navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Kandidaadid</h2>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-lg btn-success pull-right" href="/e-valimised/admin_kandidaadi_sisestamine.php">Lisa kandidaat</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>&nbsp;&nbsp;Piirkond</h3>
            </div>
            <div class="col-md-9">
                <h3>Piirkond: Tallinn - Kesklinn, Lasnamäe ja Pirita</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="tabbable tabs-left">

                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                <li><a id="tab1" role="tab" data-toggle="tab">Kõik</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab2" role="tab" data-toggle="tab">Tallinn - Mustamäe ja Nõmme</a></li>
                                <div class="clearfix"></div>
                                <li class = "active"><a id="tab2" role="tab" data-toggle="tab">Tallinn - Kesklinn, Lasnamäe ja Pirita</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab3" role="tab" data-toggle="tab">Tartu linn</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Harju- ja Raplamaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Hiiu-, Lääne- ja Saaremaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Ida-Virumaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Jõgeva- ja Tartumaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Järva- ja Viljandimaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Lääne-Virumaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Pärnumaa</a></li>
                                <div class="clearfix"></div>
                                <li><a id="tab4" role="tab" data-toggle="tab">Võru-, Valga ja Põlvamaa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Table -->
            <div class="col-md-9">

                <div class="panel panel-default">
                    <table class="table">

                        <thead>
                            <tr>
                                <th class="col-md-1"><span class="glyphicon glyphicon-chevron-down"></span> Number</th>
                                <th class="col-md-2">Nimi</th>
                                <th class="col-md-2">Erakond</th>
                                <th class="col-md-2">Viimati muudetud</th>
                                <th class="col-md-2">Toimingud</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>69</td>
                                <td>Rögabert Hüdse</td>
                                <td>Reformierakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>111</td>
                                <td>Edgar Savisaar</td>
                                <td>Keskerakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>135</td>
                                <td>Andrus Soopalu</td>
                                <td>Rahva Ühtsuse Erakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>141</td>
                                <td>Riho Rausma</td>
                                <td>Eesti Konservatiivne Rahvaerakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>262</td>
                                <td>Kristen Michal</td>
                                <td>Reformierakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>404</td>
                                <td>Karl Puusaar</td>
                                <td>Üksikkandidaat</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>422</td>
                                <td>Juhan Parts</td>
                                <td>Isamaa ja Res Publica Liit</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr> 
                            <tr>
                                <td>491</td>
                                <td>Maire Aunaste</td>
                                <td>Isamaa ja Res Publica Liit</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr> 

                            <tr>
                                <td>536</td>
                                <td>Agu Kivimägi</td>
                                <td>Eestimaa Rohelised</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>579</td>
                                <td>Ants Miller</td>
                                <td>Eesti Vabaerakond</td>
                                <td>11.05.2015 12:00</td>
                                <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>878</td>
                                <td>Hannes Hanso</td>
                                <td>Sotsiaaldemokraatlik Erakond</td>
                                <td>11.05.2015 12:00</td>
                               <td>
                                    <div class="row">
                                        <a href="admin_kandidaadi_muutmine.php" class="btn btn-warning col-xs-5">Muuda</a>

                                        <a href="admin_kandidaadi_kustutamine.php" class="btn btn-danger col-xs-5 col-xs-offset-1">Kustuta</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
</body>
