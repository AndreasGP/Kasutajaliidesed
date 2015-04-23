<?php include 'header.php' ?>
<title>Kandidaadid</title>
</head>
<body>
    <?php include 'navbar_sisselogimata.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2>Kandidaadid</h2>
            </div>
            <div class="col-xs-6">
                <br>
                <button class="btn btn-lg btn-default  pull-right"><span class="glyphicon glyphicon-search"></span> Otsi kandidaati</button>
            </div>
        </div>
    
    
    
    <div class="row">
        <h3>Piirkond</h3>
        <div class="col-md-3">
            
        <div class="panel panel-default">
        <div class="tabbable tabs-left">
            
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a id="tab1" role="tab" data-toggle="tab">Eesti</a></li>
        <div class="clearfix"></div>
        <li><a id="tab2" role="tab" data-toggle="tab">Tallinn - Mustamäe ja Nõmme</a></li>
        <div class="clearfix"></div>
        <li><a id="tab2" role="tab" data-toggle="tab">Tallinn - Kesklinn, Lasnamäe ja Pirita</a></li>
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
    <!--<div class="col-md-2">
        <label >Erakond:</label>
        <select>
            <option>Kõik erakonnad</option>
            <option>Reformierakond</option>
            <option>Keskerakond</option>
        </select>
    </div>-->
         
     <!--Table -->
    <div class="col-md-9">
        <div class="panel panel-default">
         
        <table class="table">

          <thead>
          <tr>
          <th>Number</th>
          <th>Nimi</th>
          <th>Erakond</th>
          <th>Piirkond</th>
          </tr>
          </thead>

          <tbody>
              <tr>
              <td>69</td>
              <td>Rögabert Hüdse</td>
              <td>Reformierakond</td>
              <td>Tartu linn</td>
          </tr>
          <tr>
              <td>111</td>
              <td>Edgar Savisaar</td>
              <td>Keskerakond</td>
              <td>Tallinn - Kesklinn, Lasnamäe ja Pirita</td>
          </tr>
          <tr>
              <td>135</td>
              <td>Andrus Soopalu</td>
              <td>Rahva Ühtsuse Erakond</td>
              <td>Pärnumaa</td>
          </tr>
          <tr>
              <td>141</td>
              <td>Riho Rausma</td>
              <td>Eesti Konservatiivne Rahvaerakond</td>
              <td>Tartu linn</td>
          </tr>
          <tr>
              <td>262</td>
              <td>Kristen Michal</td>
              <td>Reformierakond</td>
              <td>Ida-Virumaa</td>
          </tr>
          <tr>
              <td>404</td>
              <td>Karl Puusaar</td>
              <td>Üksikkandidaat</td>
              <td>Tartu linn</td>
          </tr>
          <tr>
              <td>422</td>
              <td>Juhan Parts</td>
              <td>Isamaa ja Res Publica Liit</td>
              <td>Harju- ja Raplamaa</td>
          </tr> 
          <tr>
              <td>491</td>
              <td>Maire Aunaste</td>
              <td>Isamaa ja Res Publica Liit</td>
              <td>Võru-, Valga- ja Põlvamaa</td>
          </tr> 
          
          <tr>
              <td>536</td>
              <td>Agu Kivimägi</td>
              <td>Eestimaa Rohelised</td>
              <td>Lääne-Virumaa</td>
          </tr>
          
          <tr>
              <td>579</td>
              <td>Ants Miller</td>
              <td>Eesti Vabaerakond</td>
              <td>Tartu linn</td>
          </tr>
          
          <tr>
              <td>878</td>
              <td>Hannes Hanso</td>
              <td>Sotsiaaldemokraatlik Erakond</td>
              <td>Hiiu-, Lääne- ja Saaremaa</td>
          </tr>

          </tbody>
        </table>
    </div>
        
  
    </div>
  </div>
        
        </div>
</body>
<?php include 'footer.php' ?>
