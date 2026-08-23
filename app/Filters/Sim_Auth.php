<?php


namespace App\Filters;


use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Sim_Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if(! session()->get('isLoggedIn') ||
            session()->get('company_role') !== 'company'){
            $question_id = $request->uri->getSegment(3);
            if ( ! $question_id ) $question_id = '';
            setcookie('question_id', $question_id, time() + (86400 * 30), "/");
            return redirect()->to('simulation');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
