<?php

namespace App\Http\Controllers;
use App\Models\Assigment;
use App\Models\cartapoder;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CartaPoderController extends Controller
{
    public function createCartapoder($asignacionId){
        $assigment=Assigment::with(['user','device'])->findOrFail($asignacionId);
        $qrCode= base64_encode(QRCode::format('svg')->size(200)->generate("ASIGNACION ID:{$assigment->id}"));
        $pdf = Pdf::loadView('pdf.carta_poder', [
            'assigment' => $assigment,
            'qr'=>$qrCode
        ]);


        $ruta='storage/cartas/carta_'.$assigment->id.'.pdf';
        $pdf->save(public_path($ruta));

        cartapoder::create([
            'assigmentId'=>$assigment->id,
            'route'=>$ruta,
            'content'=>'Hola',
            'qrCode'=>'hola',
            'userId'=>auth()->id(),
            'date'=>date('Y-m-d')

        ]);
        return response()->download(public_path($ruta));
    }
}
