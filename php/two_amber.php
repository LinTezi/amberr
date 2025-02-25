
<meta charset="utf-8"> 
<?php
$urok="Артикул: Указать при добавлении товара";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['tel']))		    {$tel	    	= $_POST['tel'];	    if ($tel == '') 	{unset($tel);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['person']))			{$person			= $_POST['person'];		if ($person == '')	{unset($person);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="bogdan.g30102004@gmail.com";
// текст письма 
$note_text="Предприятие : \r\n $urok \r\n Имя : $name1 \r\n Email : $email1 \r\n Телефон : $tel \r\n Дополнительная информация :$text \r\n Согласие на обработку персон.данных 'Дал' : $person";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:black;'>Уважаемый(ая) <b style='color:orange;'>$name1</b> Ваше письмо доставлено. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:orange;'> $email1</b>.</p>";
}

?>
