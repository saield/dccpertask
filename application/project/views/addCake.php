<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<body>

<form  name ="add cake" method="post" action="http://localhost/codeigniter-3.0.0/index.php/birthday_controller/AddCake" enctype="multipart/form-data">
Name:<input type="text" name="name" />
Description:<textarea name="description" rows="2" > </textarea>
Message:<input type="text" name="message" />
Price:<input type="number" name="price" />

Picture :<input type="file" name='fileUpload' />

<input type="submit" name="submit" />

</form>
</body>
</html>