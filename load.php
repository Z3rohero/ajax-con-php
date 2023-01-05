<?php
include_once ("index.php");

$columns = ['id','usuario','oficio','time'];
$table = "user";
$campo = isset($_POST['campo'])? $db->real_escape_string($_POST['campo']) : null;
$sql ="select". implode(',',$columns)."from $table";
echo $sql;
$resultado = $db->query($sql); 
$num_colum = $resultado -> num_colum;
$html='';
if($num_colum > 0){
  while ($row = $resultado -> fecth_assoc()){
         $html .= '<tr>';
         $html .= '<td>.$row[id].</td>';
         $html .= '<td>.$row[usuario].</td>';
         $html .='<td>.$row[oficio].</td>';
         $html .= '<td>.$row[time].</td>';
         $html .= '</tr>';
  }
}else {
  $html .= '<tr>';
  $html .= '<td colspan="5"> SIn resultados de busqueda</td>';
  $html .= '</tr>';
  
}

echo json_encode($html, JSON_USECAPED_UNICODE);
?>