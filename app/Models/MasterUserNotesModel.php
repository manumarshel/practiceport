<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterUserNotesModel extends Model
{
    protected $table = 'mst_user_notes';
    protected $primaryKey = 'PKNoteID';
    protected $allowedFields = [
        'user_id',
        'question_id',
        'notes'
    ];
}
