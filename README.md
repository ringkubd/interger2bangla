# Integer2bangla

Integer number to bangla number and date to bangla date

Initial this class or you may use it as trait . and simple just call ***number()*** or ***monthtobangla*** method with integer value

## Number Method

```PHP
$bangla = new Numbertobangla();
$bangla_integer = $bangla->number(9856565656);
echo $bangla_integer;
```
### Using


```PHP
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


```
