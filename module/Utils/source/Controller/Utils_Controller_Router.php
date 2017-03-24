<?php

class Utils_Controller_Router extends Drone_Mvc_AbstractionController
{
    public function notFound()
    {
        # Envía los datos en terminal (sin template)
        $this->setTerminal(true);
        echo "Page not found!";
        return array();
    }
}