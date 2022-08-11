<?php

namespace App\lib;
use Illuminate\Html\FormFacade;

class GridView
{
	public function __construct($array1, $array2, $model)
	{
		echo '<table><tr>';
		foreach ($array1 as $key => $value) {
			echo '<th>'.$value.'</th>';
		}
		echo '</tr><tr>';
		$j = 0;
		foreach ($model as $model) {
			$j++;
			for ($i=0; $i<sizeof($array2); $i++)
			{
				if ($array2[$i]=='-') 
				{
					echo '<td>'.$j.'</td>';
				}
				else 
				{
					$element = $array2[$i];
					echo '<td>'.$model->$element.'</td>';
				}
			}
			//Get table name of current model and then specify the name of current controller for creating URL
			$table_name = $model->getTable();
			//create URL for edit
			$url = url('admin').'/'.$table_name.'/'.$model->id;
			//Edit Link
			echo '<td><a href="'.$url.'/edit">ویرایش</a></td>';
			//create route for delete
			$route = $table_name.'.destroy';
			//Delete Button
			echo '<td>'.FormFacade::open(['method'=>'DELETE','route'=>[$route,$model->id]]);
			echo FormFacade::submit('حذف');
			echo FormFacade::close();
			echo '</td><tr>';
		}
		echo '</tr></table>';
	}
}

?>