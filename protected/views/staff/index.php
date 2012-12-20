<?php
/* @var $this StaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Staffs',
);

$this->menu=array(
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h1>Staff Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
