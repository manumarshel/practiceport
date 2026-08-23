<?php


namespace App\Filters;


use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Inst_Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if(! session()->get('isLoggedIn') ||
            session()->get('user_role') !== 'institution'){
            return redirect()->to('institution');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
