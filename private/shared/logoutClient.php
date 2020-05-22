<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="myNav">
            <div class="container">
                <a href="<?php echo url_for('web/index.php'); ?>" class="navbar-brand">
                    PinkCinema
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('/web/pages/cartelera.php'); ?>" >Cartelera</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('/web/pages/nosotros.php'); ?>" >Nosotros</a>
                        </li>
                        </li>
                            <a class="nav-link" href="<?php echo url_for('web/index.php?cerrar_sesion=1'); ?>">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>   