
<!DOCTYPE html>
<html>
<head>
	<title>Liste</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--SAyfayı mobil uyumlu hale getirir... -->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	
</head>
<body>

<?php 
include 'navbar.php';

?>
<div class="jumbotron">
  <h1 class="display-6">Yeni Ekleme Formu</h1>
<form action="yeni-kayit.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Başlık</label>
    <input type="text" name="baslik" class="form-control" id="baslik" placeholder="Başlık Giriniz">
  </div>

  
  <div class="form-group">
    <label for="aciklama">Açıklama</label>
    <textarea class="form-control" name="aciklama" id="aciklama" rows="3"></textarea>
  </div>
   <div class="form-group">
    <label for="tarih">Tarih</label>
    <input type="date"  name="tarih" value="" class="form-control" id="tarih">
  </div>
  <button type="submit" class="btn btn-success">Kaydet</button>
</form>

</div>
<script type="text/javascript" src="dist/js/jquery.js"></script>
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>