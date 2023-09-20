<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>
<body>
    <?php
    class car{
        public $a;
    }
    $audi=new car();
    echo var_dump($audi instanceof car); //to check the object is belongs to the ckass or not

    class bus{
        public $a;
        public $b;
        function __construct($a,$b){
            $this->a=$a;
           $this->b=$b;

        }
        function get(){
    echo "<h1>$this->a</h1>";
        }
    }
    $obj=new bus("jkk","df");
     $obj->get();


     //INHERITANCE
     class bus2 extends bus{
        public $c;
        function __construct($a,$b,$c){
            parent::__construct($a,$b); 
            $this->c=$c;
        }
        function get(){
            echo parent::get();
            echo $this->c;
        }
     }
     $childobj=new bus2(10,20,30);
     $childobj->get();

     //CONSTANT KEYWORD
     class ex{
        const x=1100;
        function disp(){
             return self::x;
        }

     }
     $obj3=new ex();
     echo $obj3->disp();
     echo ex::x;
     // ABSTRACT CLASS
abstract class parents{
    abstract function disp();
}
class child1 extends parents{
    function disp(){
        echo "dfdsf";
    }
}
class child2 extends parents{
 function disp(){
        echo "yuio";
  
    }
}
$child2=new child2();
$child2->disp(); 

//INTERFACE
trait interface1{
    function disp(){
        echo "hii <br>";
    }
}
trait interface2{
    function disp2(){
        echo "how are you! <br>";
    }
}
class welcome{
    use interface1,interface2;
}
$wlc=new welcome();
$wlc->disp();
$wlc->disp2();

//STATIC
class staticex{
    public static function disp(){
        echo "dg";
    }
    function __construct(){
        echo self::disp();
    }
}
$s=new staticex();

    ?>
</body>
</html>