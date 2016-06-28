<?php

class Cat {

    public $name;
    public $position;

    public function __construct($name) {

        $this->name = $name;
        $this->position = ['x' => 0, 'y' => 0];
    }
    
    public function  MoveTo($x, $y)
    {
    }

    protected function innerFunction()
    {
        print 'innerFunction';
    }

}
?>

<!doctype html>
<html lang="zh-tw">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>
        <?php ?>
    </body>
</html>
