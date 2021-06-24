<?php

namespace Controllers;

class Home
{
    /**
     * afficher home
     */
    public function index()
    {

        $titreDeLaPage = "Home Page";

        $message = "Bienvenue dans la documentation";
        $messageChange = "je suis un message que tu peut changez";

        if (!empty($_POST['messageChange'])){
            $messageChange = $_POST['messageChange'];
        }

        \Rendering::render("home/home", compact('message', 'messageChange', 'titreDeLaPage'));

    }
}

