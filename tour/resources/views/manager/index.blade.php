 @extends('layouts.app')

 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Manager List</div>
                 <form action="{{route('manager.index')}}" method="get" class="make-inline">
                     <div class="form-group make-inline">
                         <h2 style="color:red;">try to filter managers</h2>
                         <select class="form-control" name="client_id">
                             <option value="0" disabled @if($filterBy==0) selected @endif>Select client</option>

                             @foreach ($clients as $client)
                             <option value="{{$client->id}}" @if($filterBy==$client->id) selected @endif> {{$client->name}} {{$client->surname}}</option>
                             @endforeach
                         </select>
                     </div>
                     <div class="form-group make-inline">
                         <div class="form-check">

                             <input class="form-check-input" type="radio" name="sort" value="asc" @if($filterBy=='asc' ) checked @endif id="sortBy">
                             <label class="form-check-label" for="sortBy">asc</label>

                         </div>
                         <div class="form-check check">
                             <input class="form-check-input" type="radio" name="sort" value="desc" @if($filterBy=='desc' ) checked @endif id="sortByDesc">
                             <label class="form-check-label" for="sortByDesc">dsc</label>


                         </div>

                     </div>
                     <button type="submit" class="btn btn-info">Filter</button>
                     <a href="{{route('manager.index')}}" class="btn btn-info">Clear filter</a>
                 </form>
                 <div class="card-body">
                     <ul class="list-group">

                         @foreach($managers as $manager)
                         <li class="list-group-item list-line">
                             <img src="{{$manager->portret}}">
                             <div class="list-line__check">
                                 <div class="list-line__check__client">
                                     <label>Manager</label>
                                     {{$manager->name}} {{$manager->surname}}<br>

                                 </div>
                                 <div class="list-line__check__manager">

                                     <label>Client</label>
                                     {{$manager->clientManager->name}} {{$manager->clientManager->surname}}<br>
                                 </div>

                                 <div class="list-line__buttons">

                                     <a href="{{route('manager.edit', [$manager])}}" class="btn btn-info btn-sm">Edit</a><br>
                                     <form method="post" action="{{route('manager.destroy', [$manager])}}">
                                         @csrf
                                         <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                     </form>
                                 </div>
                             </div>

                         </li>
                         @endforeach


                     </ul>
                     {{-- <div class="paginator-container">
                         {{$managers->links()}}

                 </div> --}}
             </div>
         </div>
     </div>
 </div>
 </div>
 @endsection
