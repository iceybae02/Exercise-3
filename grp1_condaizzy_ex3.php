
<?php

// functions 

//a. file_get_contents
$file = 'index2.html';
$content = file_get_contents($file);
echo "Content of $file: $content";

// b. file_put_contents
$new_file = 'new_file.html';
$new_content = '<h1>This is a new file</h1>';
file_put_contents($new_file, $new_content);
echo "Wrote '$new_content' to $new_file";

// c. file_exist
$check_file = 'index2.html';
if (file_exists($check_file)) {
    echo "File $check_file exists";
} else {
    echo "File $check_file does not exist";
}

//d. file()
$lines_file = 'index2.html';
$line = file($lines_file, FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    echo "$line\n";
}

?>
