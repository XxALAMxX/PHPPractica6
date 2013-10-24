<?php
$paises=array();
$paises["Mexico"]=array("Guadalajara","Monterrey","Guanajuato","Vallarta","Manzanillo");
$paises["Japon"]=array("Tokio","Hiroshima","Osaka","Yokohama","Kioto");
$paises["Estados Unidos"]=array("Atlanta","Detroit","Los Angeles","New York","Chicago");
$paises["Canada"]=array("Ontario","Nueva Escocia","Alberta","Yukon","Manitoba");
$paises["Afganistan"]=array("Badashsan","Lawgar","Kabul","Zabul","Nimruz");
$paises["Argentina"]=array("Chaco","Cordoba","La Rioja","Misiones","Salta");
$paises["Italia"]=array("Florencia","Venecia","Monza","Trento","Novara");
$paises["Puerto Rico"]=array("Moca","Aguas Buenas","Aguada","Cidra","Rio Grande");
$paises["Turquia"]=array("Estambul","Ankara","Adana","Mersin","Esmirna");
$paises["Jamaica"]=array("Lucea","Montego Bay","Saint Ann's Bay","Port Antonio","Black River");
echo "<ul>";
foreach($paises as $pais=>$ciudades){
echo "<li>".$pais."</li><ul>" ;
foreach($ciudades as $ciudad){
echo "<li>".$ciudad."</li>";
}
echo "</ul>";
}

?>