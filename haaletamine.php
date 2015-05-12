<?php include 'header.php' ?>
<script type="text/javascript" src="/e-valimised/js/abi_haaletamine.js"></script>
<title>E-Hääletamine</title>
</head>
<body>
    <div class="wrap">
    <?php include 'navbar_sisselogitud.php' ?>
        <div class="content">
    <div class="container">   

    <h2>Teie valimispiirkonnaks on <span>Tartu linn</span>.</h2>
    
    
    <div class="row">
 
     <!--Table -->
    <div class="col-md-6">
        <h3>Kandidaadid teie piirkonnas on:</h3>
        <div class="panel panel-default">
         
        <table class="table table-hover">

          <thead>
          <tr>
          <th>Number</th>
          <th>Nimi</th>
          <th>Erakondlik kuuluvus</th>
          <th>Detailid</th>
          </tr>
          </thead>

          <tbody>
              <tr>
              <td>69</td>
              <td>Rögabert Björn</td>
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
          <tr class = "active">
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
          </tbody>
        </table>
    </div>
  
    </div>
     <div class="col-md-6">
     <div class="col-md-11">
          <h3>Teie valik on:</h3>
          <div class="jumbotron">
          <h3>Number 404</h3>
          <h1>Karl Puusaar</h1>
          <h3>Üksikkandidaat</h3>
          <br>
          
         <a class="btn btn-lg btn-success pull-right" href="/e-valimised/haale_kinnitus.php">Kinnitan hääle</a>
           </div>
     </div>
     </div>
  </div>
        
        </div>
</div>
        <?php include 'footer.php' ?>
        </div>