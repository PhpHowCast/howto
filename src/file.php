<?

function isFileExist($path){
	$res = false; //здесь стоит что $res всегда будет false. Теде надо сделать проверку сущенствования файла и присвоить рельное значение.
	return $res;
}

function createFile($path){
	//Надо сделать создание файла с путем $path.
}

function wroteToFile($path, $data){
	//Надо сделать запись данных из переменное $data в файл $path.
	echo "Вызвал wroteToFile<br/>";
	if(isFileExist($path)){
		echo "Проверил существование файла функцией isFileExist. Файл существует.<br/>";
		echo "Записываю строку '".$data."' в файл ".$path."<br/>";
	}else{
		echo "Проверил существование файла функцией isFileExist. Файл <b>не</b> существует.<br/>";
		echo "Вызываю функцию createFile для создания файла ".$path;
		createFile($path);
	}
}


?>