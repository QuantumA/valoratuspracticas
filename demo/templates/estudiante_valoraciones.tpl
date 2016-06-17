<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="demo/templates/bootstrap-3.3.6-dist/css/estilos.css" media="screen" />
</head>
{include file="../templates/header_estudiante.tpl" title=foo}

<body>

<div class="container-fluid" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">


                <div class="tabbable" id="tabs-241263">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#panel-697197" data-toggle="tab">Ultimas Valoraciones</a>
                        </li>
                        <li class="active">
                            <a href="#panel-964341" data-toggle="tab">Mis valoraciones</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane" id="panel-697197">
                            {foreach $valoraciones as $r}
                            <div class="col-lg-10">
                                <div class="col-md-2" style="padding-top: 10px;">
                                    <ul style="list-style-type:none">
                                        <li>{$r->login}</li>
                                        <li>{$r->fecha}</li>
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
                        </div>
                        <div class="tab-pane active" id="panel-964341">


                            <div class="panel-group" id="panel-780359">

                                {$turns=0}
                                {foreach $valoracionPropia as $v}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-780359" href="#panel-element-861822_{$turns}"><h4>{$v->titulo}</h4></a>
                                    </div>
                                    <div id="panel-element-861822_{$turns}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                           {$v->comentario}
                                        </div>
                                    </div>
                                </div>
                            {$turns=$turns+1}
                            {/foreach}

                       </div>


                    </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
</body>
{include file="../templates/footer.tpl"}
</html>
<!-----
{$turns=0}
{foreach $valoracionPropia as $r}
    <div class="panel-group" id="panel-2_{$turns}">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="panel-title" data-toggle="collapse" data-parent="#panel-286939" href="#panel-element-14422_{$turns}">{$r->titulo}</a>
            </div>
            <div id="panel-element-14422_{$turns}" class="panel-collapse collapse in">
                <div class="panel-body">
                    {$r->comentario}
                </div>
            </div>
        </div>

    </div>
    </div>
    {$turns=$turns+1}
{/foreach}----->



<!---
			<div class="tabbable" id="tabs-241263">
				<ul class="nav nav-tabs">
					<li>
						<a href="#panel-697197" data-toggle="tab">Section 1</a>
					</li>
					<li class="active">
						<a href="#panel-964341" data-toggle="tab">Section 2</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="panel-697197">
						<p>
							I'm in Section 1.
						</p>
					</div>
					<div class="tab-pane active" id="panel-964341">
						<p>
							Howdy, I'm in Section 2.
						</p>
					</div>
				</div>
			</div>

-->