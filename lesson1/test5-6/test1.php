class A {
public function foo() {
    static $x = 0;
    echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();


/*Выведет 1234
Статик переменнная static $x = 0 привязана к классу А, поэтому значение сохраняется при каждом вызове.*/