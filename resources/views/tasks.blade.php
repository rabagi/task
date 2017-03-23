@extends('layout') 
@section('content')



<div class="panel panel-default">
    <div class="panel-heading"> 
        <h3 class="panel-title">Tasks list </h3>
    </div>
    
    <div class="panel-body">
    @include('common/errors')
     <form action="/tasks" method="POST" class="form-horizontal">
     {{csrf_field()}}
         
         <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Task name     </label>
             <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
             </div>                     
         </div>
        <div class="form-group">
         <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-primary">
                <span>+</span>Add Task
             </button>
         </div>
                 
        </div>
     
     </form>
    </div>
    
</div>
<hr>




@endsection