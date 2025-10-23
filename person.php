<?php
class Person
{
    public $name = "Pavla";
    public $age = 54;
    public $isMarried = true;

  public function pozdrav()
  {
    return "Ahoj já jsem {$this->name}";
  }
}
$person = new Person();
?>
<pre>
    <?php var_dump($person->name="Martin");?>
    <?php var_dump($person->pozdrav());?>
</pre>
