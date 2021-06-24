<?php


class Rendering

{


        /**
         * 
         * genere le rendu de données interpolées dans un template
         * 
         * @param string $template
         * @param array $donnees
         * 
         */
        public static function render(string $template, array $donnees):void
        {


            extract($donnees);
        
            ob_start();


            require_once "templates/".$template.".html.php";
        
            
            $contenuDeLaPage = ob_get_clean();
            
            
            require_once "templates/layout.html.php";

        }


}