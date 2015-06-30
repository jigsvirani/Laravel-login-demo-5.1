<?php 

namespace App\Http\Controllers;

use Exception;
//use Illuminate\Routing\BaseController;;

class BaseController extends Controller
{
    protected $layout = null;
    protected function setPageContent($content)
    {
        if (is_null($this->layout))
        {
            throw new Exception('layout was not set');
        }
        return view($this->layout, ['content' => $content]);
    }
    
}

?>