<?php 
// echo "home" .  " " . $home_model;
// echo "<pre>";

// foreach($query as $k => $value)
// {
//     echo $value['name'] . "<br>";
// }
$data = [
    'type'  => 'input',
    'name'  => 'email',
    'id'    => 'hiddenemail',
    'value' => 'john@example.com',
    'class' => 'hiddenemail',
];

echo form_input($data);
?>