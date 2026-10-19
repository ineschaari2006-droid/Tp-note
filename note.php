<?php
$notes = [
    "Mohamed" => 14,
    "Sami" => 9,
    "Amel" => 17,
    "Yassine" => 8,
    "Ines" => 12
];
$admis = array_filter($notes, function($note) {
    return $note >= 10;
});
print_r($admis);
asort($notes);
echo "<br>Notes triees :<br>";
print_r($notes);
$notes_bonus = array_map(function($note) {
    return $note + 1;
}, $notes);
echo "<br>Notes avec bonus :<br>";
print_r($notes_bonus);

?>