<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <form class="navbar-brand navbar-form navbar-left" role="search">
            <div class="form-group has-feedback">
                <input id="busqueda" name="busqueda" type="text" class="form-control" placeholder="Busca alguna empresa" onkeyup="dinamic(this.value)" autocomplete="off"/>
                <i class="glyphicon glyphicon-search form-control-feedback"></i>
                <div class="resultados " >
                    <table class="table hidden" id="resultados" name="resultados">
                    </table>
                </div>
            </div>
        </form>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="inicio">Inicio</a></li>
            <li><a href="ranking">Ranking</a></li>
            <li><a href="#about">Empresas</a></li>
            <li><a href="#contact">Colabora</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right"style="margin-right: 7mm">
            <li><a href="login.php">Login</a></li>
            <li><a href="set_up.php">Set up</a></li>
        </ul>
    </div>
</nav>


<script type="text/javascript">

function dinamic(cadena) { //here cadena is your input value
    var min = 3;
    if (cadena.length >= min) { // true when the typed value have 3 or more characters
        $.ajax({
            type: 'POST',  //method to pass the information to busquedas_dinamicas.php
            url: 'busquedas',
            data: 'cadena=' + cadena, //name of the variable
            success: function (respuesta) { //if works then
                $('#resultados').html(respuesta);
            }
        });
    }
    if (cadena.length>3) {
        document.getElementById('resultados').className = 'table';
    } else
        document.getElementById('resultados').className += ' hidden';
}
</script>
