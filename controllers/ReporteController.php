<?php

namespace Controllers;

use Model\ActiveRecord;
use MVC\Router;
use Mpdf\Mpdf;




class ReporteController {
    public static function pdf(Router $router)
    {

        $mpdf = new Mpdf(
            [
                "default_font_size" => "12",
                "default_font" => "arial",
                "orientacion" => "p",
                "margin_top" => "30",
                "format" => "Letter",

            ]
        );
        
        //  $productos = ActiveRecord::fetchArray(query:"SELECT * FROM productos");
        //  $html = $router->load(view: 'pdf/reporte', datos:[
        //     'productos' => $productos
        //   ]);

        //  $css = $router->load(view: 'pdf/syles');
        //crear lo que dice en pdf
        $mpdf->WriteHTML( "<h1>Reporte para crear un nuevo PDF</h1>");
        $mpdf->Output();


        // $router->render(view: 'pdf/reporte', []);
    }

}