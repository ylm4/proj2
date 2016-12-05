<?php
class design{
	public function table(){
		return "<table>";
	}
	public function tTable(){
		return "</table>";
	}
	public function rows(){
		return "<tr></tr>";
	}
	public function elements($element){
		foreach ($element as $elements){
			echo "<td>{$elements}</td>";
		}
	}
	public function tableRows($rows){
		foreach ($rows as $row){
			echo "<th>{$row}</th>";
		}
	}
}
$newDesign = new design;
$row1= array("First Name", "Last Name", "Age");
$row2=array("Yanira", "Morales", "21");
$row3=array("John", "Stubs", "30");
$row4= array("Abel", "Vega", "21");
$row5= array("Wilbert","Roberts","19");

echo $newDesign->table();
echo $newDesign->rows();
echo $newDesign->tableRows($row1);
echo $newDesign->rows();
echo $newDesign->elements($row2);
echo $newDesign->rows();
echo $newDesign->elements($row3);
echo $newDesign->rows();
echo $newDesign->elements($row4);
echo $newDesign->rows();
echo $newDesign->elements($row5);
echo $newDesing->tTable();


?>
