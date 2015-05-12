<?php include 'header.php' ?>
<script type="text/javascript" src="/e-valimised/js/script.js"></script>
<script type="text/javascript" src="/e-valimised/js/abi_kandidaadid.js"></script>
<title>Kandidaadid</title>
</head>
<body>
    <div class="wrap">
    <?php include 'navbar_sisselogimata.php' ?>
        <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Kandidaadid</h2>
            </div>
            <div class="col-sm-4">
                <div id="parameetrid" class="container" style="display:none">

                    <div class="col-xs-1">
                        <p>Nimi:</p>
                        <p>Piirkond:</p>
                        <p>Erakond:</p>
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" style="width:100%;text-align:left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                Piirkond
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tartu linn</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Harju- ja Raplamaa</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pärnumaa</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lääne-Virumaa</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" style="width:100%;text-align:left" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" >
                                Erakond
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Keskerakond</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Reformierakond</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eestimaa Rohelised</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Üksikkandidaat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>
                <div id="otsingunupp" class="otsingunupp btn btn-lg btn-default pull-right"><span class="glyphicon glyphicon-search"></span> Otsi kandidaati</div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3">
                <h3>&nbsp;&nbsp;Piirkond</h3>
            </div>
            <div class="col-md-9">
                <h3>Kandidaadid piirkonnas Tallinn - Kesklinn, Lasnamäe ja Pirita on</h3>
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
                                <th class="col-md-1">Kandidaadi detailid</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>69</td>
                                <td>Rögabert Hüdse</td>
                                <td>Reformierakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>111</td>
                                <td>Edgar Savisaar</td>
                                <td>Keskerakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>135</td>
                                <td>Andrus Soopalu</td>
                                <td>Rahva Ühtsuse Erakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>141</td>
                                <td>Riho Rausma</td>
                                <td>Eesti Konservatiivne Rahvaerakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>262</td>
                                <td>Kristen Michal</td>
                                <td>Reformierakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>404</td>
                                <td>Karl Puusaar</td>
                                <td>Üksikkandidaat</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>
                            <tr>
                                <td>422</td>
                                <td>Juhan Parts</td>
                                <td>Isamaa ja Res Publica Liit</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr> 
                            <tr>
                                <td>491</td>
                                <td>Maire Aunaste</td>
                                <td>Isamaa ja Res Publica Liit</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr> 

                            <tr>
                                <td>536</td>
                                <td>Agu Kivimägi</td>
                                <td>Eestimaa Rohelised</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>

                            <tr>
                                <td>579</td>
                                <td>Ants Miller</td>
                                <td>Eesti Vabaerakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>

                            <tr>
                                <td>878</td>
                                <td>Hannes Hanso</td>
                                <td>Sotsiaaldemokraatlik Erakond</td>
                                <td><a href="kandidaadi_detailid.php" class="btn btn-default">Vaata lähemalt</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
             </div>
        <?php include 'footer.php' ?>
        </div>
</body>

