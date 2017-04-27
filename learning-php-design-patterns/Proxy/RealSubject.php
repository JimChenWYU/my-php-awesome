<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 4:43 PM
 */

namespace JimChen\Patterns\Proxy;


class RealSubject implements ISubject
{
    function request()
    {
        // TODO: Implement request() method.
        $practice = <<<REQUESt
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="proxy.css">
  <title>Username / Password Login</title>
</head>
<body>
<header>PHP Tip Sheet: 
    <span>For OOP Developers</span>
</header>
<ol>
<li>1. ...</li>
<li>2. ...</li>
<li>3. ...</li>
</ol>
</body>
</html>
REQUESt;
        echo $practice;
    }
}