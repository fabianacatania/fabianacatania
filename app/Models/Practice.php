<?php
// app/Models/Practice.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    protected $fillable = ['numero_pratica', 'nome', 'cognome', 'cuaa'];
}
