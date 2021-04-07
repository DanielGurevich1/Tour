 @extends('layouts.app')

 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Client List</div>

                 <div class="card-body">
                     <ul class="list-group ">
                         @foreach($managers as $manager)
                         <img src="{{$manager->portret}}">
                         Manager: {{$manager->name}} {{$manager->surname}} || Client: {{$manager->clientManager->name}} {{$manager->clientManager->surname}}<br>
                         <a href="{{route('manager.edit', [$manager])}}">[edit]</a><br>
                         <form method="post" action="{{route('manager.destroy', [$manager])}}">
                             @csrf
                             <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                         </form>

                         @endforeach
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection
