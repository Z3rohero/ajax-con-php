<?php
include_once ("config.php");

$columns = ['id_usuario','usuario','oficio','tiempo'];
$table = "usuario";
$campo = isset($_POST['campo'])? $conn->real_escape_string($_POST['campo']) : null;
// cuidado con los espacios
$sql ="select " . implode(',',$columns)."  from   ".$table.";";
echo $sql;
$resultado = $conn->query($sql); 
$num_colum = $resultado -> num_colum;
$html='';
if($num_colum > 0){
  while ($row = $resultado -> fecth_assoc()){
         $html .= '<tr>';
         $html .= '<td>.$row[id_usuario].</td>';
         $html .= '<td>.$row[usuario].</td>';
         $html .='<td>.$row[oficio].</td>';
         $html .= '<td>.$row[tiempo].</td>';
         $html .= '</tr>';
  }
}else {
  $html .= '<tr>';
  $html .= '<td colspan="5"> SIn resultados de busqueda</td>';
  $html .= '</tr>';
  
}

echo json_encode($html, JSON_USECAPED_UNICODE);
?>