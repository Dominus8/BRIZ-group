<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="admin-section presentation-admin">
            <div class="admin-section__title">
                 <h2>Управление картой</h2>
            </div>
            <div class="admin-section__form">
                <form action="/admin/update-map-test" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group"> 
                        <div>
                          <input type="checkbox" id="RU-KYA" name="RU-KYA" value="Красноярский край" checked>
                          <label for="RU-KYA">Красноярский край</label>
                        </div>

                        <div>
                          <input type="checkbox" id="RU-SA" name="RU-SA" value="Республика Саха">
                          <label for="RU-SA">Республика Саха</label>
                        </div>
                        <button class="btn btn-primary" type="sucsess"> Изменить регионы</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>