<?php include 'header.php' ?>
<title>E-Hääletamine</title>
</head>
<body>
    <?php include 'navbar_sisselogimata.php' ?>
    <div class="container">
        <h2>Kandidaadi sisestamine</h2>
        <br>
    <div class="col-sm-3">
        <img src="http://s3.amazonaws.com/auteurs_production/images/cast_member/26725/original.jpg?1338050148" class="img-responsive" alt="Kek" width="200" height="200"/>
    </div>
    <div class="container">
    <div class="form-group">

        <form name="form" class="form-horizontal" novalidate>
            <div class="row">
                <div class="col-sm-6">                 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Eesnimi:</label>
                        <div class="col-xs-7">
                            <input class="form-control" type="text" id="firstname" name="firstname" ng-model="user.firstname" placeholder="<?php echo $firstname ?>" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Perekonnanimi:</label>
                        <div class="col-xs-7">
                            <input class="form-control" type="text" name="lastname" ng-model="user.lastname" placeholder="<?php echo $lastname ?>" required/>
                        </div>
                    </div>

                    
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="pwd">Erakond:</label>
                        <div class="col-xs-7">
                            <select class="form-control" id="party" ng-model="user.party" required>
                                <option value="" style="display:none;"></option>
                                <?php foreach ($parties as $row): ?>
                                    <option><?php echo $row->getName(); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="area">Piirkond:</label>
                        <div class="col-xs-7">
                            <input class="form-control" id="area" type="text" name="area" ng-model="user.area"  required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="education">Haridus:</label>
                        <div class="col-xs-7">
                            <select class="form-control" id="education" ng-model="user.education" name="education" required>
                                <option value="" style="display:none;"></option>
                                <?php foreach ($educations as $row): ?>
                                    <option><?php echo $row->getName(); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>                     
                    </div>
                    
                    <div class="form-group" onload="populatedropdown(daydropdown, monthdropdown, yeardropdown)">
                        <label class="control-label col-xs-3" for="date">Sünniaeg:</label>
                        <div class="col-xs-3">
                            <select class="selectpicker" data-width="110%" id="yeardropdown" onchange="onYearChange()" ng-model="user.year" name="year" required>
                            </select> 
                        </div>
                        <div class="col-xs-2">
                            <select class="selectpicker" data-width="110%"  id="monthdropdown" onchange="onMonthChange()" ng-model="user.month" name="month" required>
                            </select> 
                        </div>
                        <div class="col-xs-2">
                            <select class="selectpicker" data-width="110%" id="daydropdown" ng-model="user.day" name="day"required>
                            </select> 
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="job">Töökoht:</label>
                        <div class="col-xs-7">
                            <input class="form-control" type="text" placeholder="Töökoht" name="job" ng-model="user.job" required>
                        </div>
  
                    </div>

                    


                    

                    <div class=""form-group">
                         <label class="control-label col-xs-3" for="pic">Pilt:</label>
                        <div class="col-xs-7">
                            <input class="file" name="pic" type="file" onchange="readURL(this)" id="pic" ng-model="user.pic" required>
                        </div>
                    </div>

                </div>
            </div>

            <label class="control-label" for="description">Kommentaar.</label>
            <br>
            <textarea class="form-control" rows="6" cols="100" ng-model="user.description" name="description">
            </textarea>
            <br>

            <div class="pull-right">             
                <input class="btn btn-success" type="submit" value="Kandideeri">
                <input class="btn btn-danger" type="submit" value="Tühista">
            </div>
        </form> 
    </div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
