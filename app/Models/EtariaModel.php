<?php

namespace App\Models;

use CodeIgniter\Model;

class EtariaModel extends Model
{
    protected $table = 'etarias';
    protected $allowedFields = [
        'idade',
        'situacao',
        'created_at'
    ];
}
