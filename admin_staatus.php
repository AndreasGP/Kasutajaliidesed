<?php include 'header.php' ?>
<script type="text/javascript" src="/e-valimised/js/abi_kandidaadid_lisamine.js"></script>
<title>Valimiste staatus</title>
</head>
<body>
    <?php include 'admin_navbar.php' ?>
    <div class="container">
        <div class='col-xs-10 col-xs-offset-2'>
            <h2>Valimiste staatuse muutmine</h2>
            <br>
            <h3>Valimiste staatus on hetkel: <b>Valimised on alanud</b></h3>
            <br>
            <img src='/e-valimised/skeem.png'></img>
            <br>
            <br>
            <div class="form-group">
                <label class="control-label col-sm-3" for="area">Uus staatus:</label>
                <div class="col-sm-7">
                    <input class="form-control" id="area" type="text" value="<Võimalikud staatused>" name="area" ng-model="user.area"  required/>
                </div>
            </div>
            <br>
            <br>
            <div class="col-xs-10">
            <a class="btn btn-warning pull-right" type="submit" href="/e-valimised/admin_staatuse_muutmine.php">Kinnita uus staatus</a>
            </div>
        </div>
    </div>
</div>
</body>
