<?php 
  function can_upload($file){
	// если имя пустое, значит файл не выбран
    if($file['name'] == '')
		return 'Вы не выбрали файл.';
	
	if($file['size'] == 0)
		return 'Файл слишком большой.';
	
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'jpeg');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }



if(isset($_FILES['poster']))
{
    $check = can_upload($_FILES['poster']);
      if($check === true){
        // загружаем изображение
	$poster_url = '.././img/' . basename($_FILES['poster']['name']);
	move_uploaded_file($_FILES['poster']['tmp_name'], $poster_url);
        echo 'Файл успешно загружен!';
      }
	else {
	    // выводим сообщение об ошибке
	    echo $check;  
	}
      
}
else{
    $file_name = $_POST['file_name'];
    $poster_url = './img/' . $file_name;
    $title = $_POST['title'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];
    $rating = $_POST['rating'];
    $description = $_POST['description'];
    $pdo = new PDO('mysql:host=localhost;dbname=anime;port=3306','root');
    	$sql = 'INSERT INTO animeitem(title,year,genre,author,rating,description,poster_url) VALUES(?,?,?,?,?,?,?)';
	$query = $pdo->prepare($sql);
	$query->execute([$title,$year,$genre,$author,$rating,$description,$poster_url]);
	echo 'Готово';
}

    
?>  