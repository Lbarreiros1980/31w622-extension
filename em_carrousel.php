<?php
/**
 * @package           Carrousel
 * @author            Eddy Martin
 * @copyright         Collèege de Maisonneuve
 * @license           GPL-2.0-or-later
 * 
 * plugin Name: em_carrousel
 * Description: Permet d'afficher une boîte modale de l'image sélectionnée d'une galerie. Pour ensuite accéder à toutes les images de la galerie
 * Author: Eddy Martin
 * Author URI: https://github.com/eddytuto
 */

function genere_html(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    
    "<div class='boite'>"
    . "<code>-------Auteur: " . get_the_author() . "</code>"
    . "<date>-------Date de publication: " . get_the_date() . "</date>"
    . "<code>---------Adresse URL" . get_the_guid() . "</code>"
    . '</div> <!-- fin class="boite" -->';
    
    return $contenu;
   }
   add_shortcode('em_carrousel', 'genere_html');