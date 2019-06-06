<style>
    body {
        font-family: "Droid Sans", sans-serif;
        color: #a6acae;
    }

    #estilo_cuerpo_evento {
        background-color: white !important;
    }

    /*HEAD */
    #estilo_modificarevento {
        background-color: #0084b4;
        margin-bottom: 15px;
    }

    #estilo_titulomodificar {
        color: white;
        font-family: Calibri;
        display: inline-block;
    }

    #estilo_botoncerrarevento {
        float: right;
        margin-top: 15px;
    }

    /* TABS */
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        background-color: white !important;
    }

    #estilo_tabs {
        font-family: Calibri;
        font-size: 13px;
        font-weight: bold;
        color: #7c7c7c !important;
    }

    #estilo_tabs :focus {
        background-color: #349bb7 !important;
        color: white !important;
    }

    #estilo_tabs :hover {
        background-color: #00aad8 !important;
        color: white !important;
    }

    #estilo_tabs :visited {
        background-color: red !important;
        color: white !important;
    }

    /* GENERAL*/
    #estilo_label {
        color: #0594acf0;
        font-weight: 500;
    }

    .estilo_label_numero {
        font-weight: bold;
        color: #0b83a8b0;
        padding-top: 21px;
    }

    #check1 {
        display: none;
    }

    #check2 {
        display: none;
    }

    /*SERVICIOS */
    .estilo_titulos_2 {
        color: #0594acf0;
        font-weight: 700;
    }

    #checkbox_2 {
        color: #a6acae;
    }

    #tabla_periodo {
        display: none;
    }

    #tabla_insumos {
        display: none;
    }

    .titulo_2 {
        color: #026475f0;
    }

    th {
        color: #959596;
    }

    label {
        padding-top: 3%;
    }

    #contenido {
        float: left;
        clear: both;
        width: 100%;
        overflow: auto;
        font-size: 13px;
        padding: 3px;
    }

    #insumos_higiene {
        display: none;
    }

    table {
        border: 1px solid #e0e0e0;
    }

    #continuar {
        margin-top: 5%
    }

    #otros {
        display: none;
        margin-top: 5%;
    }

    #otros2 {
        display: none;
        margin-top: 5%;
    }

    #otros3 {
        display: none;
        margin-top: 5%;
    }

    #text_gastos {
        text-align: justify;
        width: 100%;
        background-color: #bcd7ff59;
        padding: 3%;
        font-weight: bolder;
        display: none;
        margin-top: 3%;

    }


    /*DISERTANTES - MODAL */

    .modal-header {
        background-color: #0084b4;
        padding-bottom: 10px;
        padding-top: 10px;

    }

    .modal-title {
        color: white;
        font-size: 18px;
    }

    #estilo_label_modal {
        font-weight: bold;
        color: #919191;
    }

    .modal-body {

        padding-left: 50px;
        padding-right: 50px;

    }

    /*servicios secom */
    #checksi1 {
        display: none;
    }

    #checno2 {
        display: none;
    }


    /*BOTON*/
    #continuar {

        margin-bottom: 5%;
    }

</style>
<!-- MODAL -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"> + Nuevo disertante </h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="estilo_label_modal">Nombre</label>
                            <input type="text" class="form-control" id="usr" placeholder="Juan Perez">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="estilo_label_modal">DNI</label>
                            <input type="number" class="form-control" id="usr" placeholder="39397559">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label id="estilo_label_modal"><img
                                    src="<?php echo base_url(); ?>img/unsj/calendario.png" alt=""
                                    style="width: 13px; height:12px;"> | Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="usr" placeholder="dd/mm/aaaa">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="estilo_label_modal"><img
                                    src="<?php echo base_url(); ?>img/unsj/calendario.png" alt=""
                                    style="width: 13px; height:12px;"> | Fecha de llegada</label>
                            <input type="date" class="form-control" id="usr" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group">
                            <label id="estilo_label_modal">Número de Reserva:</label>
                            <input type="text" class="form-control" id="usr" placeholder="12-121212"">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="estilo_label_modal"><img
                                    src="<?php echo base_url(); ?>img/unsj/calendario.png" alt=""
                                    style="width: 13px; height:12px;"> | Fecha de partida</label>
                            <input type="date" class="form-control" id="usr" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group">
                            <label id="estilo_label_modal">Número de Resolución:</label>
                            <input type="text" class="form-control" id="usr" placeholder="12-121212"">
                        </div>
                    </div>
                </div>
                <hr>

                <p>Itineario</p>
                <textarea name="comentarios" rows="3" cols="35">Escribe aquí tus comentarios</textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>


<script>
    function muestra_oculta(id) {
        if (document.getElementById) { //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }

    window.onload = function () {/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    }
</script>

<div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="estilo_cuerpo_evento">
        <div class="row">
            <div class="col-md-12" id="estilo_modificarevento">
                <h3 id="estilo_titulomodificar">MODIFICAR EVENTO</h3>
                <button id="estilo_botoncerrarevento" type="button" class="btn btn-info">Cerrar evento</button>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li id="estilo_tabs" class="active"><a id="estilo_tabs" href="#hometab" role="tab"
                                                   data-toggle="tab">GENERAL</a>
            </li>
            <li id="estilo_tabs"><a id="estilo_tabs" href="#servicios" role="tab" data-toggle="tab">SERVICIOS</a>
            </li>
            <li id="estilo_tabs"><a id="estilo_tabs" href="#disertantes" role="tab"
                                    data-toggle="tab">DISERTANTES</a></li>
            <li id="estilo_tabs"><a id="estilo_tabs" href="#secom" role="tab" data-toggle="tab">SERVICIOS SECCOM</a>
            </li>
        </ul>
        <!-- GENERAL -->
        <div class="tab-content">
            <div class="tab-pane active" id="hometab">
                <div class="col-md-12">
                    <div class="row" style="padding-top: 20px">

                        <div class="col-md-4">
                            <label id="estilo_label" for="usr"><img
                                    src="<?php echo base_url(); ?>img/unsj/usuario.png" alt=""
                                    style="width: 13px; height:12px;"> | Nombre:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="col-md-4">
                            <label id="estilo_label" for="sel1"><img
                                    src="<?php echo base_url(); ?>img/unsj/empleados.png" alt=""
                                    style="width: 13px; height:12px;"> | Coordinador:</label>
                            <select class="form-control" id="sel1">
                                <option>Juan Perez</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label id="estilo_label"><img
                                    src="<?php echo base_url(); ?>img/unsj/calendario.png" alt=""
                                    style="width: 13px; height:12px;"> | Fecha:</label>
                            <input type="date" class="form-control" id="usr" placeholder="10/02/2019">
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="check"  " >Se inició el expediente
                                    solicitando autorización para el evento,
                                    y la reserva presupuestaria del crédito
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div id="check1" class="form-group">
                                <label class="estilo_label_numero">Nro. expediente:</label>
                                <input type="text" class="form-control" id="usr" placeholder="12-121212">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="check02">Se inició el expediente de
                                    resolución de participantes. </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="check2" class="form-group">
                                <label class="estilo_label_numero">Nro. expediente:</label>
                                <input type="text" class="form-control" id="usr" placeholder="12-121212">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="col-md-6">
                        <label id="estilo_label"><img src="<?php echo base_url(); ?>img/unsj/pdf.png" alt=""
                                                      style="width: 15px; height:15px; "> | <b>Programa
                            Tentativo:</b></label>
                        <label> <a>Programa_jornada_trabajo_social.pdf</a></label>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <hr>
                </div>
                <button id="continuar" type="button" class="btn btn-primary btn-block"
                        style="background-color: #0084b4;">Continuar
                </button>


            </div>


            <!-- SERVICIOS -->
            <div class="tab-pane" id="servicios">
                <div class="col-md-12">
                    <div class="row" style="padding-top: 20px">
                        <img src="<?php echo base_url(); ?>img/moneda.png" alt="" style="width: 23px; height: 23px; "
                             id="img_gastos">

                        <div id="text_gastos">
                            <p>
                                GASTOS: <br>
                                <br>
                                1| Hasta $7999,99: Factura conformada por el Responsable del Evento <br> <br> 2| De
                                $8000 a
                                $19999,99: Nota explicando por qué el proveedor elegido es el más conveniente + Factura
                                conformada
                                por el Responsable del Evento. <br> <br> 3| De $20.000 en adelante: 3 Presupuestos +
                                Nota eligiendo
                                proveedor con su respectiva justificación + Factura conformada por el Responsable del
                                Evento
                            </p>
                        </div>
                    </div>
                    <hr>	

                    <div class="row">
                        <div class="col-md-4" id="checkbox_2">
                            <label class="estilo_titulos_2" for="">DISEÑO</label>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Marca (isologo, logo). </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Flyers. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Banner. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Programa. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Certificado. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Afiches. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Invitaciones. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Identificaciones . </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="otros1">Otros. </label>
                                <div id="comentario">	

                                </div>

                                <div id="otros">
                                    <textarea  id="comentario1" class="form-control" rows="5" id="comment"></textarea>
                                    <button type="button" class="btn btn-success .btn-xs" id="agregar" 
                                            style="float: right; margin-top: 4%; background-color:  #55c2ff;">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" id="checkbox_2">
                            <label for="" class="estilo_titulos_2">SERVICIOS GENERALES</label>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Sonido e iluminación. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" onClick="muestra_oculta('contenido')">Limpieza.
                                </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Vigilancia. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Agua y vasos. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="insumos_higiene01">Insumos de
                                    higiene. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Viandas. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Instal. y materiales eléctricos. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="otros002">Otros. </label>
                                <div id="otros2">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                    <button type="button" class="btn btn-success .btn-xs"
                                            style="float: right; margin-top: 4%;background-color:  #55c2ff;">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4" id="checkbox_2">
                            <label for="" class="estilo_titulos_2">COMERCIAL Y PROTOCOLO</label>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Reserva del lugar del evento. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Mobiliario (mesas, sillas,
                                    escritorios,manteles). </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Pantallas, proyectores, computadoras.
                                </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Catering. </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Merchandising, regalos institucionales.
                                </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" id="otros003">Otros. </label>
                                <div id="otros3">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                    <button type="button" class="btn btn-success .btn-xs"
                                            style="float: right; margin-top: 4%; background-color:  #55c2ff;">
                                        Agregar
                                    </button>
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- CONTENIDO DE INSUMOS_HIGIENE -->
                        <div id="contenido2">
                            <div class="col-md-12">

                                <hr>
                                <div id="insumos_higiene" class="row">
                                    <div class="col-md-6">
                                        <h5 class="titulo_2"><img src="<?php echo base_url(); ?>img/unsj/limpieza.png"
                                                                  alt="" style="width: 13px; height:12px;"> | <u>INSUMOS
                                            DE HIGIENE:</u></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label> <a data-toggle="modal" data-target="#myModal2">+ Agregar
                                            insumos</a></label>
                                        <div class="modal fade" id="myModal2" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">+ Agregar Insumos</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        TABLA DE INSUMOS
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal"
                                                                id="tabla_insumos01">Agregar insumos
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="tabla_insumos">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Guantes de latex</td>
                                            <td>5</td>
                                            <td>ICONOS</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <button id="continuar" type="button" class="btn btn-primary btn-block"
                        style="background-color: #0084b4;"  >Continuar
                </button>
            </div>


            <!-- DISERTANTES -->
            <div class="tab-pane" id="disertantes">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <label for=""> <a data-toggle="modal" data-target="#myModal"> + Agregar
                                disertantes</a></label>
                            <button style=" float: right;" type="button" class="btn btn-info">Generar Nota</button>
                            <br>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>DNI</th>
                                    <th> Fecha nac</th>
                                    <th>Fecha llegada</th>
                                    <th>Fecha partida</th>
                                    <th>Nro. resolución</th>
                                    <th> Nro. reserva</th>
                                    <th>Itinerario</th>
                                    <th> Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>23630555</td>
                                    <td> 18/09/1975</td>
                                    <td> 22/10/2018</td>
                                    <td> 30/10/2018</td>
                                    <td> 1500</td>
                                    <td> 74566</td>
                                    <td> *</td>
                                    <td><img src="<?php echo base_url(); ?>img/unsj/editar.png"
                                             alt="" style="width: 13px; height:12px;">
                                        <img src="<?php echo base_url(); ?>img/unsj/eliminar.png"
                                             alt="" style="width: 13px; height:12px;">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>


                </div>
                <button id="continuar" type="button" class="btn btn-primary btn-block"
                        style="background-color: #0084b4;">Continuar</button>
            </div>

            <!-- SERVICIOS  SECCOM -->
            <div class="tab-pane" id="secom">
                <div class="col-md-12" style="color: #a6acae;">
                    <div class="row">

                        <div class="col-md-6">
                            <br>
                            <h5> <b>	Seleccione los tipos de servicios Seccom</b></h5>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Locución </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Cobertura </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Transmisión en vivo </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Registro en video </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Registro Fotográfico </label>
                            </div>

                        </div>
                    </div>
                    <hr style="margin-bottom: 0px;">
                    <div class="col-md-12">

                        <h5>¿Los servicios son con cargo?</h5>
                        <div class="col-md-12">

                            <div class="row">
                                <div class="radio">
                                    <label style="padding-top: 0px;"><input id="checksi" type="radio"
                                                                            name="optradio" checked>Si</label>
                                </div>
                                <!-- SI TILDA SI -->
                                <div id="checksi1" class="div">
                                    <p><b style="color: #455a64;">Tildar la opción que corresponda en función de si
                                        el ítem ya se hizo o no</b></p>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Hasta $7999,99: Factura conformada
                                            por el Responsable del Evento </label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">De $8000 a $19999,99: Nota explicando
                                            por qué el proveedor elegido es el más conveniente + Factura conformada
                                            por el Responsable del Evento. </label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">De $20.000 en adelante: 3
                                            Presupuestos + Nota eligiendo proveedor con su respectiva justificación
                                            + Factura conformada por el Responsable del Evento </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="radio">
                                    <label style="padding-top: 0;"><input id="checkno" type="radio"
                                                                          name="optradio">No</label>
                                </div>
                                <!-- SI TILDA NO -->
                                <div id="checno2">
                                    <button style="position: center" type="button" class="btn btn-info">Generar nota
                                        de solicitud de servicios
                                    </button>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <button id="continuar" type="button" class="btn btn-danger btn-block"
                        style="background-color: #e62626;">Finalizar
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<script>
    /*primer check */
    $("#check").click(function () {
        $("#check1").toggle();
    });
    /*segundo check */
    $("#check02").click(function () {
        $("#check2").toggle();
    });
    /*Tabla de periodo */
    $("#tabla_periodo01").click(function () {
        $("#tabla_periodo").toggle();
    });
    /*table de insumos */
    $("#tabla_insumos01").click(function () {
        $("#tabla_insumos").toggle();
    });
    /*checkdeinsumos*/
    $("#insumos_higiene01").click(function () {
        $("#insumos_higiene").toggle();
    });
    /*gastos */
    $("#img_gastos").click(function () {
        $("#text_gastos").toggle();
    });
    /*checkdeotros*/
    $("#otros1").click(function () {
        $("#otros").toggle();
    });
    /*checkdeotros*/
    $("#otros002").click(function () {
        $("#otros2").toggle();
    });
    /*checkdeotros*/
    $("#otros003").click(function () {
        $("#otros3").toggle();
    });
    /*checkdeservicios secom */
    $("#checksi").click(function () {
        $("#checksi1").toggle();
    });

    $("#checkno").click(function () {
        $("#checno2").toggle();
    });




</script>

