<?php
/*
$filename = "D:/PRACTICE/wordpress-support-engineer/assets/07.PHP/08. File Handling/text.txt";

if (file_exists($filename)){
    $handle = fopen($filename, "r");
    $content = fread($handle, filesize($filename));
    fclose($handle);

    echo $content;
}else {
    file_put_contents($filename, "ফাইলটি তৈরি করা হলো।");
    echo "নতুন ফাইল তৈরি করা হয়েছে: $filename";
}

// Alternative 
if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo "ফাইলটি খুঁজে পাওয়া যায়নি";
}


    "r" --> শুধু পড়া ->ফাইলটি আগে থেকে থাকতে হবে।
    "w" --> লিখবে, আগের সব মুছে --> না থকলে নতুন তৈরি করবে।
    "a" --> শেষে যোগ করবে। --> না থাকলে নতুন তৈরি করবে।
    "r+"--> পড়া এবং লেখা ->ফাইলটি আগে থেকে থাকতে হবে।
    "w+"--> আগের টেক্সট মুছে ফেলবে, নতুন করে লিখবে এবং পড়বে।
    "a+"--> আগের টেক্সট রেখে দিবে, লিখবে এবং পড়বে।
*/
