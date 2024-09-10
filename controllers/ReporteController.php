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
        
        $sql = ActiveRecord::fetchArray("SELECT * FROM productos");
        $resultado = $sql;
        $html = $router->load('pdf/reporte', [
            'resultado' => $resultado
        ]);

        $header = $router->load('pdf/header', []);
        $footer = $router->load('pdf/footer',[]);
        $css = $router->load('pdf/styles', []);

        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter($footer);

        $mpdf->WriteHTML($css);
        $mpdf->WriteHTML($html);
        $mpdf->Output();




        //   $productos = ActiveRecord::fetchArray(query:"SELECT * FROM productos");
        //   $html = $router->load(view: 'pdf/reporte', datos:[
        //      'productos' => $productos
        //    ]);

        // $mpdf->AliasNbPages(alias: '[pagetotl');
        //   $css = $router->load(view: 'pdf/syles');

        //   $header = $router->load(view: 'pdf/header');
        //   $footer = $router->load(view: 'pdf/footer');

        //   $mpdf->SetHTMLHeader(header: $header);
        //   $mpdf->SetHTMLFooter(footer:$footer);



        // //crear lo que dice en pdf
        // $mpdf->WriteHTML(html: $css, mode: HTMLParseMode:: HEADER_BODY);

        // $mpdf->WriteHTML(html: $html, mode: HTMLParseMode:: HTML_BODY);

        // $mpdf->Output();


        // // $router->render(view: 'pdf/reporte', []);
    }

}