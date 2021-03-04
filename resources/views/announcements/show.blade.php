@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           @foreach($announcements as $announcement)
               <div class="col-lg-3">
                   <div class="card mb-5" style="width: 18rem;">
                       <div class="card-body">
                           <p><span>{{ $announcement->title }}</span> <span>{{ $announcement->user_id }}</span></p>
                           <p>{{ $announcement->created_at }} - {{ $announcement->price }} €</p>
                            <a href="{{ route('announcements.details', $announcement) }}" class="btn btn-primary">Voir plus</a>
                            @can ('disable-announcements')
                                <p>{{ $announcement->enabled }}</p>
                                <a href="{{ route('admin.announcements.edit', $announcement) }}" class="btn btn-primary">Editer</a>
                            @endcan
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
   </div>
@endsection
