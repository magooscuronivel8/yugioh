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
<div class="container">
    

<table class="table table-striped">
  <thead>
    <tr class= "table-dark">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Estado</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>


  @foreach($data as $record)

    <tr>
      <th scope="row">{{$record->id}}</th>
      <td>{{$record->name}}</td>
      <td>{{$record->estado}}</td>
      
      <td>
    <a href = "edit/{{$record->id}}"> <button class="btn btn-primary"> Edit</button>  </a>
    </td>

      <td>
       <a href = "delete/{{$record->id}}"> <button class="btn btn-danger"> Delete</button>  </a>
    </td>

    </tr>

@endforeach
    
    </tr>
  </tbody>
</table>

</div>



<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
 
}
</style>




  <div class="center">
  <a href = "form"> <button class="btn btn-primary btn-lg">Create</button>  </a>
  </div>


</body>
</html>