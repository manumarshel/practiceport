<?php


namespace App\Filters;


use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Sim_Noauth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        $question_id = '';
        if ( isset($_COOKIE['question_id']) ) {
            $question_id = $_COOKIE['question_id'];
        }
        if(session()->get('isLoggedIn') && session()->get('company_role') == 'company') return redirect()->to('/simulation/dashboard/' . $question_id);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
