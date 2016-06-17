<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
</head>
{include file="../templates/header_estudiante.tpl" title=foo}

<body>


<div class="container-fluid" style="margin-top:120px">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

            <!------NAV ----->
            <ul class="nav nav-pills">
                <li role="presentation" class="nav_candidatura" onclick="mostrar_panel1()" ;><a href="#">Mis candidaturas</a></li>
                <li role="presentation" class="nav_candidatura" onclick="mostrar_panel2()"><a href="#">Practicas</a></li>
                <li role="presentation" class="hidden nav_candidatura" onclick="mostrar_panel3()"><a href="#">Mensajes</a></li>

                <li class="dropdown pull-right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                    </li>

            </ul>
            <!------NAV ----->
            <div class="jumbotron" style="margin-top: 20px">
                <!------PANEL 1------->
                <div class="panel-group" id="panel-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                               PANEL 1
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                                PANEL 1
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 1------->

                <!------PANEL 2------->
                <div class="panel-group" id="panel-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                               PANEL 2
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                               PANEL 2
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 2------->

                <!------PANEL 3------->
                <div class="panel-group" id="panel-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-14422" class="panel-collapse collapse in">
                            <div class="panel-body">
                                PANEL 3
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-984294">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-984294" class="panel-collapse collapse">
                            <div class="panel-body">
                               PANEL 3
                            </div>
                        </div>
                    </div>
                </div>
                <!------PANEL 3------->
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
</body>
{include file="../templates/footer.tpl"}
</html>


<script>

  function  mostrar_panel1(){

      document.getElementById('panel-2').style.display = 'none';
      document.getElementById('panel-3').style.display = 'none';
      document.getElementById('panel-1').style.display = 'block';

  }
  function  mostrar_panel2(){

      document.getElementById('panel-1').style.display = 'none';
      document.getElementById('panel-3').style.display = 'none';
      document.getElementById('panel-2').style.display = 'block';
  }
  function  mostrar_panel3(){

      document.getElementById('panel-1').style.display = 'none';
      document.getElementById('panel-2').style.display = 'none';
      document.getElementById('panel-3').style.display = 'block';
  }


</script>

