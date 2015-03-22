<?php
/**
 * Created by PhpStorm.
 * User: kathytr
 * Date: 3/21/15
 * Time: 9:57 PM
 */

namespace Common\Authentication;


class FileBased implements IAuthentication
{

    protected $username = " ";
    protected $password = " ";

    public function __construct($posting)
    {
        $this->username = $posting->username;
        $this->password = $posting->password;
    }


    /**
     * Function authenticate
     *
     * @param string $username
     * @param string $password
     * @return mixed
     *
     * @access public
     */
    public function authenticate()
    {
        // TODO: Implement authenticate() method.

        $filename = 'users.txt';

        $fileData = file_get_contents($filename);
        $fileLines = explode("\n", $fileData);

        foreach ($fileLines as $fileLine)
        {
            $separated = explode(':', $fileLine);
            if (count($separated) == 2)
            {
                $username = trim($separated[0]);
                $password = trim($separated[1]);

                if ($username == $this->username && $password == $this->password)
                {
                    echo 'File login success. Hello, '.htmlentities($this->username);
                    return true;
                }
            }
        }

        echo 'invalid username or password';
        return false;

    }

}