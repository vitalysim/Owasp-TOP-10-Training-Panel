<?php 
class Logger
{
    public $FileName = 'error.log';
         
    public function __toString()
    {
        return file_get_contents($this->FileName);
    }
}
 

class Person
{
    public $name = '';
    public $age = 0;

    public function __toString()
    {
        return "Name: " . $this->name . " Age: " . $this->age;
    }
}

if (isset($_GET['s']))
{
	$obj = unserialize($_GET['s']);
	echo $obj;
}
?>