<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
   protected $table = "documents";
   protected $fillable = [
    'assigmentId',
    'documentType',
    'pdfPath',
    'qrContent',
    'revocation_date'
   ];
}
