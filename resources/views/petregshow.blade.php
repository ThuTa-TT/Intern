
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Owner_Name</th>
      <th scope="col">Pet_Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Pet_Type</th>
      <th scope="col">Pet_Color</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->oname}}</td>
      <td>{{$row->pname}}</td>
      <td>{{$row->gender}}</td>
      <td>{{$row->age}}</td>
      <td>{{$row->type}}</td>
      <td>{{$row->color}}</td>
      <td>{{$row->phone}}</td>
      <td>{{$row->add}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->date}}</td>
      <td><a href="{{route('petregister.edit',$row->id)}}">Edit</td>   
    </tr>
    @endforeach
  </tbody>

  
</table>