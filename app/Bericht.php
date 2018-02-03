<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bericht extends Model
{
   protected $fillable = [
        'naam',
        'email',
        'telefoonnummer',
        'foto',
        'bericht',
        'mailinglist'
   ];
}
