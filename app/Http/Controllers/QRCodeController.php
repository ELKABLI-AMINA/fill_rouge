<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QRCodeController extends Controller
{
    public function generateQRCode()
{
    $qrcode = QrCode::encoding("UTF-8")
        ->color(8, 114, 145)
        ->backgroundColor(245, 234, 62)
        ->size(300)
        ->generate("https://akilischool.com/cours/laravel-generer-un-qr-code-avec-simple-qrcode");

    return view('qrcode', compact('qrcode'));
}

}
