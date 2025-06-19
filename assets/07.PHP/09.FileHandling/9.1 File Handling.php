<?php
$file = fopen("new.txt", "w");
fwrite($file, "Projukti Plus");

$file = fopen("new.txt", "r");
echo fread($file, filesize("new.txt"));
fclose($file);

mkdir("ProjuktiPlus");
rename("anotherFile.txt", "new.txt");

file_put_contents("test.txt", "প্রযুক্তি প্লাস - ");
file_put_contents("test.txt", "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়\n", FILE_APPEND);
echo file_get_contents("test.txt");

file_put_contents("ProjuktiPlus/newFile.txt", "নতুন ফাইল");
echo file_get_contents("ProjuktiPlus/newFile.txt");


//with variable
$fileName = "test.txt";
$fileContent = "প্রযুক্তি প্লাস - ";
file_put_contents($fileName, $fileContent);
$fileContent2 = "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়\n";
file_put_contents($fileName, $fileContent2 , FILE_APPEND);
echo file_get_contents($fileName);


file_put_contents("ProjuktiPlus/newFile.txt", "নতুন ফাইল\n");
echo file_get_contents("ProjuktiPlus/newFile.txt");

$myFoler = "Projukti";
if(!is_dir($myFoler)){
    mkdir($myFoler);
}else{
    echo "$myFoler folder already exist.";
}

file_exists();
is_readable();
is_writable();

$fileName = "D:/PRACTICE/wordpress-support-engineer/assets/07.PHP/09.FileHandling/test.txt";

if (file_exists($fileName)){
    echo file_get_contents($fileName);
}else{
    echo "ফাইলটি পাওয়া যায়নি।";
}