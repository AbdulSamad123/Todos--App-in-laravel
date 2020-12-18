@extends('layouts.app')

@section('title')

Create Todo

@endsection

@section('content')

<h1 class="text-center">Create Todos</h1>

<div class="row justify-content-center">
  
   <div class="col-md-8">
  
      <div class="card card-default">
  
         <div class="card-header">
  
            Create new todo
  
         </div>
  
         <div class="card-body">

           @if($errors->any())
           
             <div class="alert alert-danger">

               <ul class="list-group">
                   @foreach($errors->all() as $error)
                    
                    <li class="list-group-item">

                       {{ $error }}
                   
                    </li>
                   
                   @endforeach
               
               </ul>
             
             </div>
           
           @endif
  
          <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
  
            @csrf
  
            <div class="form-group">
  
              <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
  
            </div>

            <br>

            <div class="form-group">
  
              <textarea name="description" class="form-control" placeholder="Description" cols="5" rows="5">{{ $todo->description }}</textarea>
  
            </div>

            <br>

            <div class="form-group text-center">
            
               <button type="submit" class="btn btn-success">Update Todo</button>

            </div>
  
           </form>   
  
         </div>
  
       </div>  
  
    </div>
 
 </div>

@endsection