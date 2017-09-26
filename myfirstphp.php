<table>
<?php
$mult_nums = range(1,100);
// <tr>
// for ($i=0;$i<100;$i++)
// {
//   $a=Si+1;
//   echo "<th>$a</th>";
// }
// </tr>
foreach($mult_nums as $rows){
   echo '<tr>';
   foreach ($mult_nums as $cols){
       $output = $cols * $rows;
       echo "<td>$output</td>";
   }
   echo '</tr>';
}
?>
</table>
