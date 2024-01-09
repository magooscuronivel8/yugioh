<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>

<br>

<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
 
}
</style>


<div class="center">
<h1>Edit</h1>
</div>

    
<div class="container">

<form action="{{url('update_data', $data->id)}}" method = "post" enctype= "multipart/form-data">


@csrf


<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name = "name" class="form-control" id="formGroupExampleInput" value="{{$data->name}}" required>
</div>


<br>


<legend>Estado</legend>


<div class="form-check">
  <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault1" value = "Acabado"{{$data->gender === 'Acabado' ? 'checked' : ''}}>
  <label class="form-check-label" for="flexRadioDefault1">
    Acabado
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="estado" id="flexRadioDefault2" checked value = "Pendiente" {{$data->gender === 'Pendiente' ? 'checked' : ''}}>
  <label class="form-check-label" for="flexRadioDefault2">
    Pendiente
  </label>
</div>

<br>




<input type="submit">

</form>

</div>


<div class="center">
<button onclick="history.back()">Atrás</button>
</div>



</body>
</html>