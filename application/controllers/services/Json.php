<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {
    public function __construct(){

    }
    public function get_data(){

        $output_data = (object)array(
            "dash_total_matches" =>  4,
            "live" => (object)array(
                "status" => false,
                "text" => "TercerCuarto por Terra",
                "url" => "http://mixlr.com/tercer-cuarto/"
            ),
            "brand" => array(
                (object)array(
                    "type" =>"banner",
                    "img" => "img/brand/banner_performance_zone",
                    "link" => "http://google.com",
                )
            ),
            "dash" => array(
                (object)array(
                    "type"=> "picture",
                    "image"=> "img/cms/coach.jpg",
                    "copy"=> "El H.C. Pedro Morales de AutnénticosTigresUANL se unirÃ¡ al Staff de Coaches de la Selección MÉXICO U-19.",
                    "link"=> "",
                ),
                (object)array(
                    "type"=> "gallery",
                    "images"=> array(
                        (object)array("img"=> "img/cms/gal/01.jpg"),
                        (object)array("img"=> "img/cms/gal/02.jpg"),
                        (object)array("img"=> "img/cms/gal/03.jpg"),
                    ),
                    "copy"=> "Ya estamos listos para el Mundial",
                ),
            ),
        );

        $output_data->leagues = array(
            "id"=> 0,
            "name"=> "Mundial 2015",
            "preview"=> "img/ligas/mundial-2015-2.jpg",
            "color"=> "#33cd5f",
            "info"=> "<div class='league_info_aux'><img class='centered hidden' src='img/ligas/mundial-senior.png'><div class='league_info_aux_text'><h5>Campeonato Mundial Senior IFAF 2015</h5><p>El Campeonato Mundial Senior IFAF (International Federation of American Football) por sus siglas en inglÃ©s, se realizarÃ¡ del 9 al 18 de julio en el Estadio del SalÃ³n de la Fama, Tom Benson  en  Canton, Ohio. 4 dÃ­as de competencia con 3 juegos por dÃ­a.</p><p>Los kickoffs serÃ¡n al mediodÃ­a, a las 3:30 P.M. (ESTE) y 7:00 P.M. (ESTE). El 9, 12, 15 y 18 de julio, este Ãºltimo para definir a los ganadores de medallas de Oro, Plata y Bronce.<br/>El dos veces campeÃ³n defensor, el equipo nacional de los Estados Unidos de AmÃ©rica, es lÃ­der en el ranking  mundial y del grupo fuerte, seguido por JapÃ³n (3) y MÃ©xico (4). CanadÃ¡ que es (2) en el ranking, anuncio la cancelaciÃ³n de su participaciÃ³n durante el mes de mayo. Los equipos que enfrentarÃ­an a CanadÃ¡ en el calendario, tendrÃ¡n bye.</p><p>El grupo dÃ©bil se conforma por Francia (5), Australia (6), Corea del Sur (7) y Brasil (8).</p><p>Los boletos estÃ¡n disponibles en <a href='http://www.ifafworldchampionship.org/'>www.IFAFWorldChampionship.org</a></p><p>El costo por dÃ­a es de 10 USD Adulto y 5 USD (Estudiantes, Adultos mayores y Militares) (Incluye el acceso a los tres juegos del dÃ­a).</p><p>El costo de todo el evento es de 35 USD.</p><p>Todos los asientos son generales.</p></div></div>",
            "sections"=> array(
                (object)array(
                    "icon"=> "ion-ios-paper-outline",
                    "name"=> "Info"
                ), (object)array(
                    "icon"=> "ion-ios-keypad-outline",
                    "name"=> "Grupos"
                ), (object)array(
                    "icon"=> "ion-ios-americanfootball-outline",
                    "name"=> "Partidos"
                ),
            )
        );
        $json_string = json_encode( $output_data );
        // json string

        if( isset( $_GET['callback'] ) ){
            header('Content-Type: text/javascript; charset=utf8');
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Max-Age: 3628800');
            //header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
            header('Access-Control-Allow-Methods: GET');
            $callback = $_GET['callback'];
            echo $callback.'('.$json_string.');';
        }else{
            // normal JSON string
            header('Content-Type: application/json; charset=utf8');
            echo $json_string;
        }
    }
}
