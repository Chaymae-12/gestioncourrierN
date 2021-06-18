@extends('theme.admin');

@section('main-content')

 <h1 class="bg-primary text-white  text-center" >Divisions</h1>
   

<table class="table  table-dark  table-striped mt2-">

   <thead>
       <tr>
       
       <th scope="col">Division</th>
       <th scope="col">Actions</th>

       </tr>
   </thead>
   <tbody>
    @foreach ($divisions as $division)
     <tr>
      
      <td>{{$division->nomDivision}}</td> 
      
      <td> 
      <a  href={{"editD/".$division['id']}} class="btn btn-info">modifier</a>
       <a href="/createDivision" class="btn btn-primary" >Ajouter</a>
          
      </td>
    </tr>
           
    @endforeach   
    <tbody>
</table>
@endsection