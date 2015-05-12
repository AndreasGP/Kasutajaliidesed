<?php include 'header.php' ?>
<title>E-Hääletamine</title>
</head>
<div class="wrap">
    <?php include 'navbar_sisselogimata.php' ?>
    <div class="content">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3  vcenter">
                        <div style="height:70%"></div>
                    </div>
                    <div class="col-xs-6 vcenter">
                        //Nähtavad vaid vastavates olukordades
                        <div class="alert alert-danger" style="text-align:center" role="alert">Teil puudub Eesti Vabariigis hääletusõigus. Kui arvate, et tegu on veaga, kontakteeruge meiega.</div>
                        <div class="alert alert-danger" style="text-align:center" role="alert">Teie sisestatud pin-kood oli vale. Palun proovige uuesti.</div>
                        <div class="alert alert-danger" style="text-align:center" role="alert">Meil ei õnnestunud teid praegu sisse logida. Palun proovige varsti uuesti.</div>

                        <div class="jumbotron">
                            <br>
                            <h3 style="text-align:center">Sisselogimiseks palun ühendage oma arvutiga ID-kaart ning vajutage "Logige sisse".</h3>
                            <br>
                            <div class="col-xs-8 col-xs-offset-2">
                                <a class="btn btn-success" href="/e-valimised/" style="width:100%">Logige sisse</a>
                            </div>
                            <br>
                            <div class="clearfix"></div>
                            <h4 style="text-align:center">Tehnilise abi jaoks pöörduge lehele <a href="http://www.id.ee/?id=36180">http://www.id.ee/</a>.</h4>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

    </div>
    <?php include 'footer.php' ?>
</div>