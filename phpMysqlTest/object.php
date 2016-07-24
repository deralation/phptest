<?php
$object = new Human;
print_r($object); echo '<br>';

$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo '<br>';

echo $object->get_password();
echo '<br>';
$object->save_user();

class Human{
	public $name, $password;

	function save_user(){
		echo "Save user code goes here <br>";
	}

	function get_password(){
		return $this->password;
	}
}
?>

<?php 

$object1 = new Member();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name = ".$object1->name. "<br>";
echo "object2 name = ".$object2->name;

class Member{
	public $name;
}
?>

<?php 
$object = new User;
$object->name = "Alice";
$object->password = "secret";

echo $object->name;
echo $object->get_password();

class User{
	function get_password(){
		return $this->password;
	}
}
?>
<?php 

class Test{
	public $name = "Paul Smith";
	public $age = 42;
}
?>
<?php 
Translate::lookup();

class Translate{
	const ENGLISH = 0;
	const SPANISH = 1;
	const FRENCH = 2;
	const GERMAN = 3;

	static function lookup(){
		echo SELF::SPANISH;
	}
}	
?>
<?php 
class Example{
	var $name = "Michael"; // Same as public but depreceated
	public $age = 23; // Public property
	protected $usercount; // Protected property
	private function admin(){// Private method
		// Admin code goes here
	} 
}
?>
<?php 
/*$temp = new Test;
echo "Test A: ".Test::$static_property."<br>";
echo "Test B: ".$temp->get_sp()."<br>";
echo "Test C: ".$temp->$static_property."<br>";

class Test
{
	static $static_property = "I'm static";

	function get_sp(){
		return self::$static_property;
	}
}*/
?>

<?php 
	$object = new Subscriber;
	$object->name = "Fred";
	$object->password = "pword";
	$object->phone = "012 345 6789";
	$object->email = "fred@bloggs.com";
	$object->display();

	class People{
		public $name, $password;

		function save_user(){
			echo "Save user code goes here";
		}

	}

	class Subscriber extends People{
		public $phone, $email;

		function display(){
			echo "Name: ".$this->name."<br>";
			echo "Pass: ".$this->password."<br>";
			echo "Phone: ".$this->phone."<br>";
			echo "email: ".$this->email."<br>";
		}
	}
 ?>
 <?php 
	$object = new Son;
	$object->test();
	$object->test2();

	class Dad{
		function test(){
			echo "[Class Dad] I am your father<br>";
		}
	}
	class Son extends Dad{
		function test(){
			echo "[Class Son] I am Luke<br>";
		}
		function test2(){
			parent::test();
		}
	}
 ?>
 <?php 
 $object = new Tiger();

 echo "Tigers have..<br>";
 echo "Fur: ".$object->fur."<br>";
 echo "Stripes: ".$object->stripes;

 class Wildcat{
 	public $fur; // wilcats have furs
 	function __construct(){
 		$this->fur = "TRUE";
 	}
 }
 class Tiger extends Wildcat{
 	public $stripes; //Tigers have stripes

 	function __construct(){
 		parent::__construct(); // Call parents construct first 
 		$this->stripes = "TRUE";
 	}
 }
 ?>
 <?php 
class Osman{
	final function copyright(){
		echo "This class was written by joe smith";
	}
}
?>