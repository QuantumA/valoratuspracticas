<hr>
<div class="container" style="margin-top: 90px">

    <div class="row">
        <div class="col-sm-3"><!--left col-->



            <div class="text-center">
                <img src="demo/res/drawables/defaultProfile.png" class="img-circle " alt="avatar" width="100px" height="100px">
                <h6>Sube una foto distinta</h6>

                <input type="file" class="form-control">
            </div>

            <ul class="list-group" style="margin-top: 10px">
                <li class="list-group-item text-muted">Perfil</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Registrado</strong></span> {$gerente->fecha_reg}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Ultima visita</strong></span>Hoy</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Login</strong></span> {$gerente->login} </li>

            </ul>
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Candidaturas</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Valoraciones</strong></span>0</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Puntos de colaboracion</strong></span>0</li>
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
                <li><a href="#cands" data-toggle="tab">Crear practicas</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    {foreach $valoraciones as $r}
                        <div class="col-lg-10">
                            <div class="col-md-2" style="padding-top: 10px;">
                                <ul style="list-style-type:none">
                                    <li>{$r->login}</li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <h4>
                                    "{$r->titulo}"
                                </h4>
                                <p>
                                    {$r->comentario}
                                </p>
                                <hr style="border-top: 1px solid #C7C7C7;">
                            </div>

                        </div>
                    {/foreach}


                </div><!--/tab-pane-->
                <div class="tab-pane" id="cands">
                    <form class="form-horizontal" action="alta_practicas" method="post">
                        <fieldset>
                            <input type="text" name="id" class="hidden" value="{$gerente->id_empresa}">

                            <!-- Form Name -->
                            <legend>Crear nuevas practicas para {$empresaPorId->nombre}</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"> </label>
                                <div class="col-md-4">
                                    <input id="textinput" name="titulo" type="text" placeholder="Nombre oferta" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"> </label>
                                <div class="col-md-4">
                                    <input id="textinput" name="estudios" type="text" placeholder="Estudios minimos" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="salario" type="text" placeholder="Salario aproximado" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="nota" type="text" placeholder="Nota de corte" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="provincia" type="text" placeholder="Provincia" class="form-control input-md">

                                </div>
                            </div> <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput"></label>
                                <div class="col-md-4">
                                    <input id="textinput" name="duracion" type="text" placeholder="Duracion" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                        <label for="comment"></label>
                                        <textarea class="form-control" name="coment" rows="6" id="comment" placeholder="Descripcion de las practicas"></textarea>
                                    </div>
                        </fieldset>


                        <label class="col-md-4 control-label" ></label>
                        <button type="submit" class="btn btn-primary" name="registro">Registrar</button>
                        <label class="col-md-1 control-label" ></label>
                        <button type="reset" class="btn btn-danger" value="Reset">Borrar</button>

                    </form>
                    <div>

                </div>


                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">



                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
