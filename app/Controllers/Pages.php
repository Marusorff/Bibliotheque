<?php


namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Pages extends BaseController
{


    public function index($page = 'home')
    {
        helper('url');
        helper('html');
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return $this->render($page, $data);
    }
}
