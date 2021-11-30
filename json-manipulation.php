<?php 

// Referensi
// https://www.codewall.co.uk/how-to-read-json-file-using-php-examples/

$strJsonFileContents = file_get_contents("file.json");
$data = json_decode($strJsonFileContents);

echo "1. Find items in the Meeting Room <br><br>";

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]->placement->name == "Meeting Room") {
        echo $data[$i]->name . " on Meeting Room <br>";
    }
}

echo "<br><br>";
echo "2. Find all electronic devices.<br><br>";

for ($i = 0; $i < count($data); $i++) {

    if ( $data[$i]->type == "electronic") {
        echo $data[$i]-> name . " on " . $data[$i]->placement->name . "<br>";
    }

}

echo "<br><br>";
echo "3. Find all the furniture. <br><br>";

for ($i = 0; $i < count($data); $i++) {

    if ( $data[$i]->type == "furniture") {
        echo $data[$i]->name . " on " . $data[$i]->placement->name . "<br>";
    }

}

echo "<br><br>";
echo "4. Find all items were purchased on 16 Januari 2020.<br><br>";

for ($i = 0; $i < count($data); $i++) {

    if (date("d m Y", $data[$i]->purchased_at ) == "16 01 2020") {
        echo $data[$i]->name . " purchased at " . date("d F Y", $data[$i]->purchased_at) . "<br>";
    }
}

echo "<br><br>";
echo "5. Find all items with brown color. <br><br>";

for ($i = 0; $i < count($data); $i++) {
    for ($j = 0; $j < count($data[$i]->tags); $j++) {
        if ($data[$i]->tags[$j] == "brown") {
            echo "item " . $data[$i]->name . " with brown color<br>";
        }
    }
}

?>