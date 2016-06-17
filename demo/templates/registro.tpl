<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
{include file="../templates/header.tpl" title=foo}
<body>
<div class="container" style="margin-top:60px" >
<div class="row">

<h1>UNETE Y VALORA TUS PRACTICAS!</h1>
<h3>Queremos que tengas un registro comodo, No queremos aburrirte con formularios pesados</h3>
<h2>Mas tarde podras rellenar toda tu informacion...</h2>
</div>       

<div class="col-sm-6 center-block" style="position:relative; left:25%; top:25%">
 <form action="registrarse" method="post" name="Registra" onsubmit="return formulario(this)">
                <div class="form-group">
                 <label for="login">Login:</label>
				     <input type="text" class="form-control" name="login" placeholder="Nombre Usuario" id="login">
                   </div>
                   <h6>Esto no tiene porque ser un nombre, tus datos personales los puedes dar mas adelante.</h6>
                 <div class="form-group">
                 <label for="pwd">Contrase&ntilde;a:</label>
                 <input type="password" class="form-control" name="pass" placeholder="Contrase&ntilde;a" id="pass">
                 </div>
                  <h6>Tranquilo no te molestaremos, pero por seguridad quiza tengas que confirmar algun cambio.</h6>
                 <div class="form-group">
                 <label for="email">E-mail:</label>
                  <input type="email" class="form-control" name="email" placeholder="E-mail" id="email">
                  </div>
                  <h6>Te recomendamos usar mayusculas, minusculas, numeros y caracteres especiales como: # % @ etc..</h6>                                 
                 <button type="submit" class="btn btn-default" name="registro">Registrarse</button>
                 <button type="reset" class="btn btn-default" value="Reset">Borrar</button>
                 
</form>
</div>                       
</div>



</body>
<footer>

</footer>
</html>

