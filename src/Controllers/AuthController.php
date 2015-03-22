<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;

use Common\Authentication\FileBased;
use Common\Authentication\InMemory;

/**
 * Class AuthController
 */
class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
        $postData = $this->request->getPost();

        if ($postData->authType == 'file')
        {
             $auth = new FileBased($postData);
        }
        else if ($postData->authType == 'memory')
        {
            $auth = new InMemory($postData);
        }
        else
        {
            // There was a problem.
        }

        $auth->authenticate();

//        print_r($postData);
//        exit();
//        echo 'Authenticate the above two different ways' . var_dump($postData);

        // example code: $auth = new Authentication($postData['username'], $postData['password']);
    }
}
