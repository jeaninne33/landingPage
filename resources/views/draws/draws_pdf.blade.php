<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Concursantes</title>
     <link rel="stylesheet" href="{{ asset("assets/css/print_pdf.css") }}">
  </head>

<body>
    <div class="header">
      <img style=" margin-top:-90px; margin-left:-5px;  height:67px;width:200px;  position:absolute;" src="{{ asset("assets/images/pdf/header.png") }}" >
      <img style=" margin-top:-85px; margin-left:487px  height:67px;width:250px;  position:absolute;" src="{{ asset("assets/images/pdf/fecha_invoice.png") }}" >
    </div>
    <div class="panel panel-primary11">
      <div class="panel-body" >
         <img style="margin-top:-15px; margin-left:-4px; height:20px;width:150px;  position:absolute;" src="{{ asset("assets/images/pdf/FUEL_RELEASE.png") }}" >
      </div>
    </div>


<div class="contenido" >
  <div class="cintillo">
      <span class="texto-i">
        <strong>To: </strong> {{$fuel[0]->cliente}}
        <br/>
        <strong>From: </strong>  XFlight Support
        <br/>
        <strong>Request Date: </strong> {{date_format(date_create( $fuel[0]->date), 'm/d/Y') }}
        <br/>
        <strong>Release Ref#: </strong> {{$fuel[0]->cf_card}}
        <br/>
        <strong>Ref Info#: </strong> {{$fuel[0]->ref}}
      </span>
      <span class="texto-d" style="text-align: right;">
        <strong>Estimate Number:</strong> {{$fuel[0]->estimate_id}}
      </span>
      <img style="position: relative; height:130px;width:100%;" src="{{ asset("assets/images/pdf/cintillo.png") }}" >

  </div>
    
</div>
   
  </body>
</html>
