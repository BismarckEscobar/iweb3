<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader"><span class=" title">UNIMARK S.A - SUPLIENDO SALUD</span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="row TextColor center">Estadistica de Venta.</div>
        <div class="row" style="width:100%">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card hoverable horizontal">
                        <div class="row" style="margin-top: 20px">
                            <div class="col s10 m10">
                                <br>
                                <input type="checkbox" />
                                <input type="text" id="searchCatalogo">
                            </div>

                            <div class="col s1 m1" style="margin-top: 10px">
                                <select class="browser-default" id="frm_lab_row">
                                    <option value="10">10</option>
                                    <option value="100">100</option>
                                    <option value="-1">Todas las filas...</option>
                                </select>
                            </div>
                            <div class="col s1 m1" style="margin-top: 10px">
                                <select class="browser-default" id="frm_anno">
                                    <option value="-1">...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row center">
            <table class="table striped RobotoR" id="tblArticulos">
                <thead>
                <tr>
                    <th>BODEGA</th>
                    <th>LABORATORIO</th>
                    <th>ARTICULO</th>
                    <th>DESCRIPCION</th>
                    <th>AÑO</th>
                    <th>TOTAL ART VENDIDO</th>
                    <th>UNIDAD VENDIDA ANUAL</th>
                    <th>TOTAL VENTA ANUAL</th>
                    <th>PROMEDIO VENTA ANUAL</th>
                </tr>
                </thead>

                <tbody>

                </tbody>
            </table>

        </div>
  </div>
</div>
</main>
<!-- Modal Structure -->
<div id="mdlIngresos" class="modal">
    <div class="modal-content">
        <div class="row TextColor center">INGRESOS</div>
        <table class="table striped RobotoR center" id="tbl_ingresos_lote">
            <thead>
            <tr>
                <th>FECHA</th>
                <th>CANTIDAD</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</div>
 <!-- Modal ARTICULOS Structure -->
  <div id="modalArtic" class="modal">
    <div class="modal-content">
    <a class=" right modal-action modal-close"><i class="material-icons blue-text">close</i></a>
      <h4 class="center indigo-text darken-4" id="modalEncabezado"></h4>
      <h5 class="center indigo-text darken-4" id="h6Articulo">CODIGO: <span id="modalIdArticulo"></span></h5>
          <div class="row">
    <div class="col s12">
      <ul class="tabs">
          <li class="tab col s3"><a class="active RobotoR" id ="tlBdg"  href="#bodega">Bodega</a></li>
          <li class="tab col s3"><a class="RobotoR" href="#precio">Precios</a></li>
          <li class="tab col s3"><a class="RobotoR" href="#bonificado">Bonificados</a></li>
          <li class="tab col s3"><a class="RobotoR" id="tblTrans" href="#trans">Transacciones</a></li>
      </ul>
    </div>
<br>
    <div id="trans" class="col s12">
<div class="center">
    <div class="preloader-wrapper big active" id="load">
        <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
        <div class="card hoverable " ><br>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s5">
                            <input type="text" id="dtn1" class="datepicker" placeholder="00-00-0000">
                        </div>
                        <div class="input-field col s4">
                            <input type="text" id="dtn2" class="datepicker" placeholder="00-00-0000">
                        </div>
                        <div class="input-field col s1">
                            <i id="btnSearch" class="Medium material-icons">search</i>
                        </div>
                        <div class="input-field col s1">
                            <div id="dropTipo">
                                <select class="browser-default" id="sltTipo">
                                    <option value="Físico">Físico</option>
                                    <option value="Costo">Costo</option>
                                    <option value="Compra">Compra</option>
                                    <option value="Aprobación">Aprobación</option>
                                    <option value="Traspaso">Traspaso</option>
                                    <option value="Venta">Venta</option>
                                    <option value="Reservación">Reservación</option>
                                    <option value="Consumo">Consumo</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field col s1">
                            <div class="right" id="dropCount"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

       <div id="trasn"></div>
        <table id="tbl_trasn" class="display class="RobotoR"" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>FECHA</th>
                <th>LOTE</th>
                <th>TIPO</th>
                <th>CANTIDAD</th>
                <th>REFERENCIA</th>
            </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div>


    <div id="bodega" class="col s12">
        <table id="tblBodega" class="display class="RobotoR"" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>DETALLE</th>
                <th>BODEGA</th>
                <th>NOMBRE</th>
                <th>CANTIDAD DISPONIBLE</th>
            </tr>
            </thead>

        </table>
    </div>

    <div id="precio" class="col s12">
       <div id="Precio" >
       </div>
    </div>

    <div id="bonificado" class="col s12">
         <div id="bonificados">
        </div>               
    </div>
  </div>

    </div>
    </div>
    <!-- <div class="modal-footer">
    </div> -->

