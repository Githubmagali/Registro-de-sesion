<?php

class enlacesController
{
    public function enlacesController()
    {

        $enlaces = isset($_GET['view']) ? $_GET['view'] : 'index';

        $respuesta = enlacesModel::enlacesModel($enlaces);

        include $respuesta;
    }
}
