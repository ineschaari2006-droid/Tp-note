<?php
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17, "Yassine" => 8, "Ines" => 12];
foreach ($notes as $cle => $valuer) {
    echo"$cle : $valuer<br>";
}
function Moyenne(array $tab):float
{
    return array_sum($tab)/count($tab);
}
$somme= Moyenne($notes);
echo" <h3>la somme : $somme</h3>";

$tabDobNotes= array_filter($notes,fn($valuer) => $valuer>=10);//tfalter eli hachtekk bihh
echo"<pre>";//hethii traj3ek ll star
echo"<h3>les etudiant Admis :</h3><br>";
print_r($tabDobNotes);
echo"</pre>";
$val=$notes;
rsort($val);//tri dec
echo"<pre>";
echo"<h3>les Notes trier :</h3><br>";
print_r($val);
echo"</pre>";

$double=array_map(fn($valuer) => $valuer+1, $notes);//tnajem tbadel eli hachtek fi koul element men tab elkoul
echo"<pre>";
echo"<h3>plus un a toutes les notes de etudiants:</h3><br>";
print_r($double);
echo"</pre>";
?>
