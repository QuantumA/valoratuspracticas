<hr>
<div class="container" style="margin-top: 90px">

<div class="row">
<div class="col-sm-3"><!--left col-->



    <div class="text-center">
        <img src="demo/{$rutaImagen}" class="img-circle " alt="avatar" width="100px" height="100px">
        <h6>Sube una foto distinta</h6>
    <form action="carga_foto" method="post" enctype="multipart/form-data">
    <input type="text" class="hidden" name="login" value="{$usuario->login}">
        <input type="file" class="form-control" name="archivoF">
    <input type="submit">
    </form>
    </div>

    <ul class="list-group" style="margin-top: 10px">
        <li class="list-group-item text-muted">Perfil</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Registrado</strong></span> {$usuario->fecha_reg}</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Ultima visita</strong></span>Hoy</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Login</strong></span> {$usuario->login} </li>

    </ul>
    <ul class="list-group">
        <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Candidaturas</strong></span>{$cands}</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Valoraciones</strong></span>{$vals}</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong><a href="users_ranking">Puntos de colaboracion</a> </strong></span>{$usuario->pts}</li>
    </ul>

    <div class="panel panel-default">
        <div class="panel-heading">Social Media</div>
        <div class="panel-body">
            <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
        </div>
    </div>

</div><!--/col-3-->
<div class="col-sm-9">

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#messages" data-toggle="tab">Mis candidaturas</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="home">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Top</th>
                <th>Nombre</th>
                <th>Localidad</th>
                <th>Puntos</th>
                <th>votos </th>
            </tr>
            </thead>
            <tbody id="items">
            {foreach $empresas as $indice=>$r}
            <tr>
                <td>{$indice+1}</td>
                <td><a href="resume_{$r->id}">{$r->nombre}</td>
                <td><a href="location_{$r->localidad}">{$r->localidad}</td>
                <td>{$r->puntos}</td>
                <td>{$r->votos}</td>
            </tr>
            {/foreach}
            </tbody>
        </table>
        <hr>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <ul class="pagination" id="myPager"></ul>
            </div>
        </div>
    </div><!--/table-resp-->

    <hr>

</div><!--/tab-pane-->
<div class="tab-pane" id="messages">

    <h2></h2>

    <ul class="list-group">
        <li class="list-group-item text-muted">Candidaturas</li>
        {foreach $candidaturas as $r}
        <li class="list-group-item text-right"><a href="#" class="pull-left">candidatura</a>{$r->fecha_inicio|truncate:10:""}</li>
{/foreach}
    </ul>

</div><!--/tab-pane-->
<div class="tab-pane" id="settings">


    <hr>
    <form class="form" action="actualizar" method="post" id="registrationForm">
        <div class="form-group">
            <input type="text" class="hidden" name="log" value="{$usuario->login}">


            <div class="col-xs-6">
                <label for="first_name"><h4>Nombre</h4></label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="{$usuario->nombre}" value="{$usuario->nombre}"title="introduce tu nombre">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="last_name"><h4>Apellidos</h4></label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="{$usuario->apellidos}" value="{$usuario->apellidos}" title="introduce tus apellidos">
            </div>
        </div>

        <div class="form-group">

            <div class="col-xs-6">
                <label for="phone"><h4>Cendtro de estudios</h4></label>
                <input type="text" class="form-control" name="centro" id="centro" placeholder="{$usuario->centro}" value="{$usuario->centro}" title="introduce tu universidad o centro de estudios">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-6">
                <label for="mobile"><h4>Media</h4></label>
                <input type="text" class="form-control" name="media" id="media" placeholder="{$usuario->media}" value="{$usuario->media}" title="la media del ultimo titulo obtenido">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="email"><h4>Email</h4></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="{$usuario->email}" value="{$usuario->email}" title="tu correo electronico">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="email"><h4>Pais</h4></label>
                <input type="text" class="form-control" name="pais" id="location" placeholder="{$usuario->pais}" value="{$usuario->pais}"title="pais de residencia">
            </div>
        </div>
        <div class="form-group">

            <div class="col-xs-6">
                <label for="Ciudad"><h4>Ciudad</h4></label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="{$usuario->ciudad}" value="{$usuario->ciudad}" title="ciudad de origen">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
            </div>
        </div>
    </form>
</div>

</div><!--/tab-pane-->
</div><!--/tab-content-->

</div><!--/col-9-->
</div><!--/row-->
