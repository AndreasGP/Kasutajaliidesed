<?php include 'header.php' ?>
<script type="text/javascript" src="/e-valimised/js/abi_kandidaadid_kustutamine.js"></script>
<title>Staatuse muutmine</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-3  vcenter">
                <div style="height:100%"></div>
            </div>
            <div class="col-xs-6 vcenter">
                <div class="jumbotron">
                    <h3 style="text-align:center">Kas olete kindel, et soovite muuta valimiste staatust?</h3>
                    <div class="form-group">
                            <label class="control-label col-xs-3 col-xs-offset-1" for="job">Parool:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" placeholder="" name="job" required>
                            </div>
                        </div>
                    <br><br><div class="form-group">
                            <label class="control-label col-xs-3 col-xs-offset-1" for="job">Selgitus:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" placeholder="Selgitus" name="job" required>
                            </div>
                        </div>
                    <br>
                    <br>
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="row">
                            <div class="col-xs-6">
                                <a class="btn btn-success" href="/e-valimised/admin_staatus.php" style="width:100%">Ei, tagasi</a>
                            </div>
                            <div class="col-xs-6">
                                <a class="btn btn-warning" href="/e-valimised/admin_staatus.php" style="width:100%">Jah, muuda</a>
                            </div>
                        </div>
                    </div>
                </div>
                //Tegelikus rakenduses avaneks see aken staatuse lehe peal ilma uuele lehele minemata.
            </div>
        </div>
    </div>
</body>
