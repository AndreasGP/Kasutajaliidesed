<?php include 'header.php' ?>
<title>E-Hääletamine</title>
</head>
<body>
    <?php include 'navbar_sisselogimata.php' ?>
    <div class="container">   
        <ol class="breadcrumb">
        <li><a href="index.php">Valimised</a></li>
        <li class="active">Hääletamine</li>
        </ol>
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
          </tr>
          </thead>

          <tbody>
              <tr>
              <td>69</td>
              <td>Rögabert Hüdse</td>
              <td>Reformierakond</td>
 
          </tr>
          <tr>
              <td>111</td>
              <td>Edgar Savisaar</td>
              <td>Keskerakond</td>

          </tr>
          <tr>
              <td>135</td>
              <td>Andrus Soopalu</td>
              <td>Rahva Ühtsuse Erakond</td>

          </tr>
          <tr>
              <td>141</td>
              <td>Riho Rausma</td>
              <td>Eesti Konservatiivne Rahvaerakond</td>

          </tr>
          <tr>
              <td>262</td>
              <td>Kristen Michal</td>
              <td>Reformierakond</td>

          </tr>
          <tr class = "active">
              <td>404</td>
              <td>Karl Puusaar</td>
              <td>Üksikkandidaat</td>
 
          </tr>
          <tr>
              <td>422</td>
              <td>Juhan Parts</td>
              <td>Isamaa ja Res Publica Liit</td>

          </tr> 
          <tr>
              <td>491</td>
              <td>Maire Aunaste</td>
              <td>Isamaa ja Res Publica Liit</td>

          </tr> 
          
          <tr>
              <td>536</td>
              <td>Agu Kivimägi</td>
              <td>Eestimaa Rohelised</td>
              
          </tr>
          

          </tbody>
        </table>
    </div>
  
    </div>
     <div class="col-md-offset-1 col-md-4">
          <h1>Teie valik on:</h1>
          <div class="jumbotron">
          <h3>Number 404</h3>
          <h1>Karl Puusaar</h1>
          <h3>Üksikkandidaat</h3>
          <br>
          
         <button class="btn btn-lg btn-success pull-right">Kinnitan hääle</button>
           </div>
     </div>
  </div>
        
        </div>
</body>
<?php include 'footer.php' ?>
