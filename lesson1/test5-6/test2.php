class A {
public function foo() {
    static $x = 0;
    echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

/*Выведет 1122
Статик переменная static $x = 0 привязана к классу А, поэтому ее значение будет сохранятся для вызовов переменной а1. Но для б1 это значение обнулится и начнется заново, так как В - другой класс.*/