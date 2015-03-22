<?php
/**
 * Created by PhpStorm.
 * User: kathytr
 * Date: 3/18/15
 * Time: 8:33 PM
 */

namespace Common\Authentication;


class InMemory implements IAuthentication
{

    protected $username;
    protected $password;

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

        if($this->username !== "Thao" || $this->password !== "Thao123")
        {
            echo 'In Memory login failed!';
            return false;
        }
        echo 'In Memory login success! Welcome, '.$this->username;
        return true;


    }

}