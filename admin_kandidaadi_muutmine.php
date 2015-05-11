<?php include 'header.php' ?>
<title>Kandidaadi muutmine</title>
</head>
<body>
    <?php include 'admin_navbar.php' ?>
    <div class="container">
        <h2>Kandidaadi muutmine</h2>
        <br>

        <div class="col-sm-3 col-sm-offset-1">
            <label class="control-label col-sm-3" for="pic">Eelvaade:</label>   
            <img src="http://s3.amazonaws.com/auteurs_production/images/cast_member/26725/original.jpg?1338050148" class="img-responsive" alt="Kek" width="200" height="200"/>
            <br>
            <div class=""form-group">
                 <label class="control-label col-sm-3" for="pic">Pilt:</label>
                <div class="col-sm-7">
                    <input class="file" name="pic" type="file" onchange="readURL(this)" id="pic" ng-model="user.pic" required>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <form name="form" class="form-horizontal" novalidate>
                <div class="row">
                    <div class="col-sm-12">                 
                        <div class="form-group">
                            <label class="control-label col-sm-3">Eesnimi:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Karl" id="firstname" name="firstname" ng-model="user.firstname" placeholder="<?php echo $firstname ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Perekonnanimi:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Puusaar" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="pwd">Erakond:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Keskerakond" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="area">Piirkond:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Tartu linn" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="education">Haridus:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Puudulik" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                            </div>                     
                        </div>

                        <div class="form-group" onload="populatedropdown(daydropdown, monthdropdown, yeardropdown)">
                            <label class="control-label col-sm-3" for="date">Sünniaeg:</label>
                            <div class="col-sm-3">
                                <select class="selectpicker" data-width="110%" id="yeardropdown" onchange="onYearChange()" ng-model="user.year" name="year" required>
                                </select> 
                            </div>
                            <div class="col-sm-2">
                                <select class="selectpicker" data-width="110%"  id="monthdropdown" onchange="onMonthChange()" ng-model="user.month" name="month" required>
                                </select> 
                            </div>
                            <div class="col-sm-2">
                                <select class="selectpicker" data-width="110%" id="daydropdown" ng-model="user.day" name="day"required>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="job">Töökoht:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" value="Põlva Ülimkool" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="job">Muudatuse selgitus:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" placeholder="Selgitus" name="job" ng-model="user.job" required>
                            </div>
                        </div>

                        <div class="form-group">  
                            <div class="col-sm-7 col-sm-offset-3">
                                <div class="pull-right">
                                    <a class="btn btn-danger" type="submit" href="/e-valimised/admin_kandidaadid.php">Tagasi</a>
                                    <a class="btn btn-warning" type="submit" href="/e-valimised/admin_kandidaadid.php">Salvesta muudatused</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form> 
        </div>
    </div>
</div>
</body>
