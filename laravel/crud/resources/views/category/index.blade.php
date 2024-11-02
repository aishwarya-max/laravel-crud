
<div class="container">
    <div class="row">
       <div class="col-md-12">
    <div class="card-header">
        <h4>
        "Navigating Doctor Appointments: Tips for Hassle-Free Scheduling"
<a href="{{url('categories/create')}}" class="btn btn-primary float-end">Book For Appointment</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</h4>
<div class="card-body">


<table class="table table-bordered table-striped">
<thead>
    <tr><th>Id</th>
    <th>Name</th>
    <th>Medical History</th>
    <th>speciality</th>   
    <td>Age</td>
    <th>Is Active</th>
    <th>Action</th>
    </tr>
</thead>

<tbody>
    @foreach($categories as $item )
    <tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->description}}</td>
<td>{{$item->speciality}}</td>
<td>{{$item->age}}</td>
<td>
    @if($item->is_active)
    Active
    @else
    In-Active
    @endif
</td>
<td> <a href="{{url('categories/'.$item->id.'/edit')}}" class="btn-btn-success mx-2">Edit</a></td>
<td> <a href="{{url('categories/'.$item->id.'/delete')}}" class="btn-btn-success mx-2">Delete</a></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
    </div>
       </div>
    </div>
</div>

