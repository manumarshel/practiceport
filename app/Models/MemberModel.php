<?php


namespace App\Models;


use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'pf_members';
    protected $primaryKey = 'PKMemberID';
    protected $allowedFields = [
        'username',
        'activity_id',
        'email',
        'mobile',
        'father_name',
        'relation',
        'gender',
        'dob',
        'doj',
        'active_status',
        'status'
    ];
    protected $returnType     = 'array';
    
    public function getInactiveUsers()
    {
        return $this->where('active_status', 0)->findAll(); // Fetch records where status is 1
    }
    
    public function getRejectedUsers()
    {
        return $this->where('active_status', 2)->findAll(); // Fetch records where status is 1
    } public function getApprovedUsers()
    {
        return $this->where('active_status', 1)->findAll(); // Fetch records where status is 1
    }
}
