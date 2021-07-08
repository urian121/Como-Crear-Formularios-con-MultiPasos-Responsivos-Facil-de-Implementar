<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Formulario con Multi-Pasos Responsive :: Ing. Urian Viera</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link href="assets/css/gsdk-bootstrap-wizard.css" type="text/css" rel="stylesheet"/>
	<link href="assets/css/home.css" type="text/css" rel="stylesheet"/>
    <link href="assets/css/cargando.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- cargando -->
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<div class="image-container set-full-height">

    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="wizard-container">
                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="#" method="post">
                    	<div class="wizard-header">
                        	<h3> Registrar Nueva Cuenta Cliente </h3>
                    	</div>

      					<div class="wizard-navigation">
          	             <ul>
                            <li><a href="#about" data-toggle="tab">Paso 1</a></li>
                            <li><a href="#account" data-toggle="tab">Paso 2</a></li>
                            <li><a href="#address" data-toggle="tab">Fin</a></li>
                         </ul>
      					</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>RUT </label>
                                        <input type="text" name="rut" id="rut" class="form-control" placeholder="RUT">
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>NOMBRES</label>
                                        <input type="text" name="nameFull" id="nameFull" class="form-control" placeholder="Nombres">
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                       <div class="form-group">
                                        <label>APELLIDOS</label>
                                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Apellidos">
                                      </div>
                                    </div>

                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>CELULAR </label>
                                        <input type="number" name="celular" id="celular" class="form-control" placeholder="Celular">
                                      </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>TELÉFONO </label>
                                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Teléfono">
                                      </div>
                                    </div>
                              </div>
                            </div>
                            <!--fin tab 1 -->


                            <div class="tab-pane" id="account">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>NOMBRE DEL BANCO </label>
                                        <input type="text" name="nameBank" class="form-control" placeholder="Banco">
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>TIPO DE CUENTA </label>
                                            <select name="tipoCuenta" class="form-control" required="true">
                                                <option> - - - - - - - - </option>
                                                <option>AHORRO</option>
                                                <option>CORRIENTE</option>
                                            </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>NÚMERO DE CUENTA </label>
                                        <input type="number" name="numberCuenta" id="numberCuenta" class="form-control" placeholder="N° Cuenta">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!--fin tab 2 -->


                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>ESCRIBA SU CORREO </label>
                                        <input type="email" name="correo" class="form-control" placeholder="Correo">
                                      </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>ESCRIBA UNA CLAVE CUALQUIERA </label>
                                        <input type="password" name="password" class="form-control" placeholder="Clave">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                            <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm siguiente' name='next' value='Siguiente'/>
                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Fin' />
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Atrás' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            </div>
                        </div>

                    </form>
                </div>
            </div> 
        </div>
    </div>
</div> 
</div>


	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){
      $(window).load(function() {
            $(".cargando").fadeOut(1000);
        }); 
    }); 
</script>

</body>
</html>
