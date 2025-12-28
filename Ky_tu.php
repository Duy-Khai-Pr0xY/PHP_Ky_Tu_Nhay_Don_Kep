<pre>
<?php

# Đối với chuỗi thông thường thì okay, gần như hai ông này ko khác nhau lắm
$nhaydon = 'aaa';
$nhaykep = "bbb";

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";

# Nhưng trong PHP, nháy đơn không được CHÈN BIẾN VÀO
# nháy kép thì được

$name = "CyberJutsu";
$nhaydon = 'Hello $name - hihi';
$nhaykep = "Hello $name - hihi"; # màu của $name ở dòng này, rõ ràng là khác

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";

# Nháy đơn không được chèn các dạng encoding
# Nháy kép thì được

$name = "CyberJutsu";
$nhaydon = 'Đây là chữ A: \x41';
$nhaykep = "Đây là chữ A: \x41"; # màu của \x41 ở dòng này, rõ ràng là khác

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";

echo "bắt đầu test escap: \n"

# dùng nháy đôi
$name = "a'aa"

#dùng nháy `
$name=`a'aa`
var_dump($name)

# dùng backslash
$name='a\'aa'
var_dump($name)


?>
</pre>