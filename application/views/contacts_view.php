<h1>Наши контакты</h1>
<p>Мы работаем через наших официальных представлителей:</p>

<?php
 
	foreach($data as $row)
	{
		echo '<ul><li>Партнер: '.$row['name'].'</li><li>Адрес: '.$row['adress'].'</li><li>Email: '.$row['email'].'</li></ul>';
	}
	
?>
