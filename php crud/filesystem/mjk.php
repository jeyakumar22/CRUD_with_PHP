<?php
// $quote=readfile('jk.txt');

// echo $quote;
$file='jk.txt';

if(file_exists($file)){
    echo readfile($file)."<br>";

    //copy
  copy($file,'mjk.txt');

//absolute
echo realpath($file)."<br>";
//size
echo filesize($file)."<br>";

rename($file,"mm.txt");

}
else{
    echo "file not exists";
}
//make directory to create folder
mkdir('jk');
?>