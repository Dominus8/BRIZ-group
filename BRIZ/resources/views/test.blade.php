<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ csrf_field() }}
    <form action="/test-download" metod='get' enctype="multipart/form-data">
        <lable for="si" class="form-label"> <h6>Изображение слайда 535х387</h6>  </lable>
        <input id="si" type="file" class="form-control" name='image'> <br>
        <button class="btn btn-primary" type="sucsess"> Создать слайд</button>
    </form>
</body>
</html>