<?php

/**
 * @Author: anwar
 * @Date:   2017-11-15 14:11:33
 * @Last Modified by:   anwar
 * @Last Modified time: 2017-11-22 11:18:07
 */
include('Numbertobangla.php');
class Name
{
    public function construct()
    {
        $abc =  new Numbertobangla();
        $aa = $abc->monthtobangla('12/Jan/2018');
		
        echo $aa;
    }
}

$abc = new Name();
$abc->construct();
