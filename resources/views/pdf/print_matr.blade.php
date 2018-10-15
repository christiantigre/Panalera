<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="css/comprobante.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap_prince.css">

    <title>{{ $nom_factura }}</title>
    <style>
    /*@import url(http://fonts.googleapis.com/css?family=Bree+Serif);*/
    body, h1, h2, h3, h4, h5, h6{
      font-family: Georgia, "Times New Roman", Times,, serif;
    }
    span, h4, .letra {
      font-family: "Times New Roman";
      font-size: 10px;
    }
    .titulo {
      font-family: "Arial Narrow", Arial, sans-serif;
      font-size: 12px;
      white-space: pre;
    }
    .titulopie {
      font-family: Tahoma, Verdana, Segoe, sans-serif;
      font-size: 12px;
      white-space: pre;
    }
    .row > .sinespacio {
      display: inline-block;
      margin: 0;
      float: left;
      white-space: nowrap;
    }
    .row > .limpiar {
      clear: both;
    }
    table {
      border: 0px;
      border-spacing: 0px;
      border-collapse: collapse;
    }
    td, th {
      padding: 0px;
      border: 0px;
      margin: 0px;
    }
    .izq {
      text-align: right;
    }
    .borde {
      border-style: solid;
      border-width: 1px;
      border-color: black;
      padding-bottom: 3px;
    }
    .logo {
      float: center;
      text-align: center;
      margin-bottom: 0px;
    }
    .fieldset_header{
      border: 1px solid #050505; 
      padding: 10px;
      border-radius: 11px 11px 11px 11px;
      -moz-border-radius: 11px 11px 11px 11px;
      -webkit-border-radius: 11px 11px 11px 11px
    
    margin-top: .5em;
    margin-bottom: .5em;
    margin-left: 1em;
    margin-right: .5em;

    padding-top: 5px;
    padding-bottom: -15px;
    padding-right: 5px;
    padding-left: 5px;
  }
  #field_head{
    /*padding-bottom: -7px;*/
  }
  .container{
    margin-top: 15px;
  }
  .detall_cli{
    margin-top: 5px;
  }
  p{
    line-height: 1px; 
  }
  p.intro{
    line-height: 1em; 
  }
  .serie{
    font: 10px Georgia, "Times New Roman", Times, serif;
  }
  .header_label{
    font: 10px Georgia, "Times New Roman", Times, serif;
  }
  h1 {
    font: 16px Georgia, "Times New Roman", Times, serif;
  }
  h2 {
    font: 12px Georgia, "Times New Roman", Times, serif;
  }
  strong{ font-size: 75%; }
}

.tabla{
  border: 1px solid #050505; padding: 10px;
  margin: 6; padding: 6;
  width: 100%;
  height: auto;
}
.tabladetall{
  margin: 6; padding: 6;
  width: 100%;
  height: auto;
}
tr.itemdetall td{
  font: 10px Georgia, "Times New Roman", Times, serif;
  border: 0;
}
.detallval{
  padding-top: 2px;
  padding-bottom: 2px;
  padding-left: 25px;
  padding-right: 25px;
  margin: 25px;
}
.detallval label{
  font: 10px Georgia, "Times New Roman", Times, serif;
}
/*.border{
  border: 1px solid #050505; padding: 10px; 
  }*/
  table.head_fac{
    background-color: #000000
  }
  tbody tr td.border_round{
    border-radius: 11px 11px 11px 11px;
    -moz-border-radius: 11px 11px 11px 11px;
    -webkit-border-radius: 11px 11px 11px 11px;
    border: 1px solid #000000;
  }
  td {
    border: 1px solid;
  }
  tr .border{
    border: blue 5px solid;
  }
  th{
    font: 12px Georgia, "Times New Roman", Times, serif;
  }
  tbody {
    /*border: blue 5px solid;*/
  }

  tr {
    border-bottom: 1px solid #ccc;
  }
  .align_right{text-align: left;}
  .align_center{text-align: center;}
  .align_left{text-align: right;}

  table.tabla tfoot {
    border-top: 2px solid black;
  }
  
  .tabla_media_right{
    margin: 6; padding-bottom: 6;
    text-align: right;
    width: 45%;
    height: auto;
    border: 1px solid #050505; padding: 10px;
    height: auto;
  }
  .tabla_media_left{
    margin: 6; padding-bottom: 6;
    width: 45%;
    height: auto;
    border: 1px solid #050505; padding: 10px;
  }

  .header_label_clausula{
    font: 9px Georgia, "Times New Roman", Times, serif;
  }
  hr .hr_fr{
    /*height: 1px;
    width: 30%;
    background-color: black;*/
    border: 0; border-top: 1px solid #999; border-bottom: 1px solid #333; height:0;
  }
  .t_frm_detall{
    width: 100%;
    height: 10%;
    border: 1px solid #050505; padding: 10px;
    margin: 6; padding: 6;
  }
  div.panel-heading{
    background-color: #000000;
    color: #ffffff;
  }
  #divfac{
    margin-top: -27px;
  }
  div.panel-body{
    margin-top: -15px;
  }

  h4.titulo_tab{
    font: 9px Georgia, "Times New Roman", Times, serif;
  }
  .table thead tr th h4{
    padding-bottom: -15px;
    padding-top: -15px;
  }
  .table tbody tr td h4{
    padding-bottom: -15px;
    padding-top: -15px;         
  }
  table.table{
    margin-right: 7px;
    margin-left: 7px;
  }
  .round{
    border: 1px solid #050505; padding: 10px;
    border-radius: 11px 11px 11px 11px;
    -moz-border-radius: 11px 11px 11px 11px;
    -webkit-border-radius: 11px 11px 11px 11px
  }
  .un{
    width: 5px;
    height: auto;
  }
  .ds{
    width: 15px;
    height: auto;
  }
  .tr{
    width: 10px;
    height: auto;
  }
  .ct{
    width: auto;
    height: auto;
  }
  .cs{
    width: 10px;
    height: auto;
  }
  .sx{
    width: 10px;
    height: auto;
  }
  .st{
    width: 10px;
    height: auto;
  }
  .detalle{
    font: 10px Georgia, "Times New Roman", Times, serif;        
  }
  .tab_info{
    width: 100%;
  }
  .tab_info tbody tr td{
    border: none;
  }
  @page { size:8.5in 11in; margin: 1cm }
</style>
</head>

<body onload="window.print();">  
<!--<body>  -->

  <div class="container" style="margin-top: 150px;">

    <!--seccion pre-detalle de factura-->
    <fieldset class="fieldset_header" style="border: none; ">        
      <div class="row">
        <table class="tab_info" style="border: none;">
          <tbody style="border: none;">
          <tr>
            <td>
          <div class="col-xs-4">
            @foreach($ventum as $or)
            <p class="intro">
              <em>
                <label class="detall_cli header_label">
                  CLIENTE
                  @if(!empty($or->cliente))
                  {{ strtoupper($or->cliente) }}<br/>
                  @endif         
                  RUC / CI :    
                  @if(!empty($or->cc_cli))
                  {{ $or->cc_cli }}<br/>
                  @endif
                  @if(!empty($or->ruc_cli))
                  {{ $or->ruc_cli }}<br/>
                  @endif         
                  DIRECCION :
                  @if(!empty($or->dir_cli))
                  {{ strtoupper($or->dir_cli) }}<br/>
                  @endif  
                   
                </label>
              </em>
            </p>
            @endforeach
          </div>
          </td>
          <td>
          <div class="col-xs-4">
            @foreach($ventum as $or)
            <p class="intro">
              <em>
                <label class="header_label">
                  @if(!empty($or->fecha))
                  FECHA : {{ $or->fecha }}<br/>
                  @endif 

                  @if(!empty($or->cel_cli))
                  TELEFONO : {{ $or->cel_cli }}<br/>
                  @endif 

                  @if(!empty($or->id_typepay))
                  FORMA PAGO : {{ strtoupper($or->typepay->type) }}<br/>
                  @endif 

                </label>
              </em>
            </p>
            @endforeach
          </div>
          </td>
          </tr>
          </tbody>
        </table>
      </div>
    </fieldset>
    
    <hr>
   
    <fieldset style="border: none; ">
      <header class="clearfix">  
      </header>
      
      <!--Items de factura table-bordered round-->
      <table class="table "  style="border: none; width: 100%; ">
        <thead>
          <tr>
            
            <th class="tr"><center><h4 class="titulo_tab">CANTIDAD</h4></center></th>
            <th class="ct"><h4 class="titulo_tab">DESCRIPCIÓN</h4></th>
            <th class="" style="width: 30%;"><center><h4 class="titulo_tab">PRECIO UNITARIO</h4></center></th>
            <th class="sx"><center><h4 class="titulo_tab">DTO.</h4></center></th>
            <th class="st"><center><h4 class="titulo_tab">TOTAL</h4></center></th>
          </tr>
        </thead>
        <tbody>
          @foreach($detallventa as $item)
          <tr class="itemdetall">
            <td class="un" style="width: 10px"><center><h4 class="titulo_tab">{{ $item->cant }}</h4></center></td>
            <td class="ct"><h4 class="titulo_tab">{{ $item->producto }}</h4></td>
            <td class="" style="width: 30%;"><center><h4 class="titulo_tab">{{ number_format($item->precio,2) }}</h4></center></td>
            <td class="sx"><center><h4 class="titulo_tab">0</h4></center></td>
            <td class="st"><center><h4 class="titulo_tab">{{ number_format($item->total,2) }}</h4></center></td>
          </tr>
          @endforeach 
        </tbody>
      </table>
      @foreach($ventum as $or)
      <!--FIRMAS-->
      <style type="text/css">
      .sinespacio{
        margin-left: 600px;
        width: 100%;
        margin-right: 15px;
      }
    </style>
    <div class="row sinespacio">
     
    
    <!--detalle de factura-->
    <div class="col-xs-4">
      <p class="intro">
        <em>
          <style>
            .detalle tr{
              width: 350px;
            }
            .detalle tr td{
              width: 35px;
            }
          </style>
        

          <table class="detalle" id="det" style="border: none; width: 20%;">
            <tr style="border: none; ">
              <td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">SUBTOTAL.:</td><td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">$ {{ number_format($or->subtotal,2) }}</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">IVA 0%:</td><td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">$ {{ number_format($or->iva_cero,2) }}</td>
            </tr>
            <tr style="border: none;">            
              <td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">DESCUENTO:</td><td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">$ {{ number_format(0,2) }}</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">IVA {{ number_format($or->porcentaje_iva,2) }}%:</td><td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">$ {{ number_format($or->iva_calculado,2) }}</td>
            </tr>
            <tr style="border: none;">
              <td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; "><strong>TOTAL.:</strong></td><td style="border: none;font: 10px Georgia, "Times New Roman", Times, serif; ">$ {{ number_format($or->total,2) }}</td>
            </tr>
          </table>
        </em>
      </p>
    </div>         
  </div>
  @endforeach  
  

</div>
</body>

</html>
