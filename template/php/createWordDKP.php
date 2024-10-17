<?

// Проверка была ли отправлена форма
if($_SERVER["REQUEST_METHOD"] != 'POST')
  die('Доступ запрещен!');

function validateInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  
  return $data;
}

$paragraph1_city = validateInput($_POST['paragraph1_city']);
$paragraph1_date = validateInput($_POST['paragraph1_date']);

$paragraph2_fio = validateInput($_POST['paragraph2_fio']);
$paragraph2_dateBirth = validateInput($_POST['paragraph2_dateBirth']);
$paragraph2_series = validateInput($_POST['paragraph2_series']);
$paragraph2_number = validateInput($_POST['paragraph2_number']);
$paragraph2_kod = validateInput($_POST['paragraph2_kod']);
$paragraph2_date = validateInput($_POST['paragraph2_date']);
$paragraph2_whoIssued = validateInput($_POST['paragraph2_whoIssued']);
$paragraph2_address = validateInput($_POST['paragraph2_address']);

$paragraph3_fio = validateInput($_POST['paragraph3_fio']);
$paragraph3_dateBirth = validateInput($_POST['paragraph3_dateBirth']);
$paragraph3_series = validateInput($_POST['paragraph3_series']);
$paragraph3_number = validateInput($_POST['paragraph3_number']);
$paragraph3_kod = validateInput($_POST['paragraph3_kod']);
$paragraph3_date = validateInput($_POST['paragraph3_date']);
$paragraph3_whoIssued = validateInput($_POST['paragraph3_whoIssued']);
$paragraph3_address = validateInput($_POST['paragraph3_address']);

$paragraph4_model = validateInput($_POST['paragraph4_model']);
$paragraph4_type = validateInput($_POST['paragraph4_type']);
$paragraph4_vin = validateInput($_POST['paragraph4_vin']);
$paragraph4_year = validateInput($_POST['paragraph4_year']);
$paragraph4_numberCarBody = validateInput($_POST['paragraph4_numberCarBody']);
$paragraph4_numberChassis = validateInput($_POST['paragraph4_numberChassis']);
$paragraph4_numberEngine = validateInput($_POST['paragraph4_numberEngine']);
$paragraph4_color = validateInput($_POST['paragraph4_color']);

$paragraph5_series = validateInput($_POST['paragraph5_series']);
$paragraph5_number = validateInput($_POST['paragraph5_number']);
$paragraph5_whoIssued = validateInput($_POST['paragraph5_whoIssued']);
$paragraph5_date = validateInput($_POST['paragraph5_date']);

$paragraph6_stateNumber = validateInput($_POST['paragraph6_stateNumber']);
$paragraph6_price = validateInput($_POST['paragraph6_price']);

$paragraph7_price = validateInput($_POST['paragraph7_price']);

echo "<br>
1.<br>
  Город: $paragraph1_city<br>
  Дата: $paragraph1_date<br>
2.<br>
  ФИО: $paragraph2_fio<br>
  Дата рождения: $paragraph2_dateBirth<br>
  Серия: $paragraph2_series<br>
  Номер: $paragraph2_number<br>
  Код подразделения: $paragraph2_kod<br>
  Дата выдачи: $paragraph2_date<br>
  Кем выдан: $paragraph2_whoIssued<br>
  Адрес регистрации: $paragraph2_address<br>
3.<br>
  ФИО: $paragraph3_fio<br>
  Дата рождения: $paragraph3_dateBirth<br>
  Серия: $paragraph3_series<br>
  Номер: $paragraph3_number<br>
  Код подразделения: $paragraph3_kod<br>
  Дата выдачи: $paragraph3_date<br>
  Кем выдан: $paragraph3_whoIssued<br>
  Адрес регистрации: $paragraph3_address<br>
4.<br>
  Марка и модель: $paragraph4_model<br>
  Тип ТС: $paragraph4_type<br>
  VIN: $paragraph4_vin<br>
  Год выпуска: $paragraph4_year<br>
  Номер кузова: $paragraph4_numberCarBody<br>
  № шасси: $paragraph4_numberChassis<br>
  Двигатель №: $paragraph4_numberEngine<br>
  Цвет кузова: $paragraph4_color<br>
5.<br>
  Серия: $paragraph5_series<br>
  Номер: $paragraph5_number<br>
  Кем выдано: $paragraph5_whoIssued<br>
  Дата выдачи: $paragraph5_date<br>
6.<br>
  Госномер: $paragraph6_stateNumber<br>
  Стоимость: $paragraph6_price<br>
7.<br>
  Пробег: $paragraph7_price<br>
8. <br>
  Неисправность <br>
  ....
9. <br>
  Описание прицепа <br>
  ....
";