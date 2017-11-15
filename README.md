# Integer2bangla

Integer number to bangla number and date to bangla date

Initial this class or you may use it as trait . and simple just call ***number()*** or ***monthtobangla*** method with integer value

## Number Method

```PHP
$bangla = new Numbertobangla();
$bangla_integer = $bangla->number(9856565656);
echo $bangla_integer;
```
### Using as Tarit

Change ***Class Numbertobangla*** to ***Trait Numbertobangla***

```PHP
<?php 
use Numbertobangla\Numbertobangla; //or include Numbertobangla file
class Banglanuber{
  use Numbertobangla;
  
  public function index()
  {
    return $this->number(9856565656);
  }
}

```
## Monthtobangla Method ##


```PHP
$bangla = new Numbertobangla();
$bangla_date = $bangla->monthtobangla('07-31-2017'); //its now only support mm-dd-yyy and dd--mm-yyy formate
echo $bangla_date;
```
### Using as Tarit

Change ***Class Numbertobangla*** to ***Trait Numbertobangla***

```PHP
<?php 
use Numbertobangla\Numbertobangla; //or include Numbertobangla file
class Bangla_date{
  use Numbertobangla;
  
  public function index()
  {
    return $this->monthtobangla('07-31-2017');
  }
}

```



