<?php
class User
{
    public string $name;
    public int $age;

    public function introduce(): string
    {
        return "こんにちは、私の名前は" . $this->name . "です。年齢は、" . $this->age . "歳です。";
    }
}

$user1 = new User();

$user1->name = "山田太郎";
$user1->age = 30;

echo $user1->name . "<br>";

$message = $user1->introduce();
echo $message . "<br>";

$user2 = new User();
$user2->name ="佐藤花子";
$user2->age = 25;
echo $user2->introduce() . "<br>";

 ?>