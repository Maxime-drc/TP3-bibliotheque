<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isAdmin')) {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
