<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Producto</title>
</head>
<body>

<h1>Formulario</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre del producto:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese el precio del producto: :
    <br>
    <input type="number" name="price">
</label>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>






</body>
</html>
