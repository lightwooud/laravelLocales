<?php

namespace App\Http\Controllers;

use TCPDF;
use App\Models\local;

class ReporteController extends Controller
{
    public function generarPDF()
    {
        $pdf = new TCPDF();
        $local = local::join('subcategorias','locales_comerciales.subcategorias_id','=','subcategorias.id')
        ->join('categorias','subcategorias.categorias_id','=','categorias.id')
        ->select('locales_comerciales.*','subcategorias.nombre as namesubcategorias','categorias.nombre as namecategoria')
        ->get();
     


        
        // Establece la configuración y el diseño del PDF
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(true, 20);   
        

        $view = view('reporte.pdf', compact('local'))->render();
        $pdf->AddPage();
        $pdf->writeHTML($view, true, false, true, false, '');
        $pdf->Output('reporte.pdf', 'I');

        


        
    }
}
