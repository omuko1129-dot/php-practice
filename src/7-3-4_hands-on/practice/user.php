<?php
class User
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(): string
    {
        return "こんにちは、私は、" . $this->name . "です。" . $this->age . "歳です。<br>";
    }
    public function isAdult()
    {
        if ($this->age >= 18) {
            return $this->name . "は、成人です。<br>";
        } else {
            return $this->name . "は、未成年です。<br>";
        }
    }
}
echo "<h1>ユーザー管理プログラム</h1>";
echo "<h2>自己紹介</h2>";

$user1 = new User("山田 太郎",25);
echo $user1->introduce();

$user2 = new User("佐藤 花子",17);
echo $user2->introduce();

$user3 = new User("鈴木 一郎",30);
echo $user3->introduce();

echo "<h3>成人判定</h3>";

echo $user1->isadult();
echo $user2->isadult();
echo $user3->isadult();

?>