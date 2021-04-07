 @extends('layouts.app')

 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Manager List</div>

                 <div class="card-body">
                     <ul class="list-group">

                         <li class="list-group-item list-line">

                             @foreach($managers as $manager)
                             <img src="{{$manager->portret}}">
                             <div>
                                 {{$manager->name}} {{$manager->surname}} || Client: {{$manager->clientManager->name}} {{$manager->clientManager->surname}}<br>
                             </div>
                             <div class="list-line__buttons">

                                 <a href="{{route('manager.edit', [$manager])}}" class="btn btn-info btn-sm">Edit</a><br>
                                 <form method="post" action="{{route('manager.destroy', [$manager])}}">
                                     @csrf
                                     <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                 </form>
                             </div>

                             @endforeach
                         </li>


                     </ul>
                     <div class="paginator-container">
                         {{$managers->links()}} //manager_id=>$filterBy


                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection
