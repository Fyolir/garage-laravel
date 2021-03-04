@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
               <div class="col-lg-6">
                           <p>Annonce de : <span>{{ $announcement->user_id }}</span></p>
                           <p>publié le : <span>{{ $announcement->created_at }}</span></p>
                           <p>{{ $announcement->title }}</p>
                           <p>{{ $announcement->content }}</p>
                           <p>{{ $announcement->price }} €</p>
               </div>
       </div>
   </div>
   <p> Commantaires :</p>
   <div class="column">
           @foreach($comments as $comment)
                   <div class="card mb-5" style="width: 100%;">
                       <div class="card-body">
                           <p><span>{{ $comment->user_id }}</span></p>
                           <p>{{ $comment->content }}</p>
                            <a href="{{ route('announcements.details', $announcement) }}" class="btn btn-primary">Voir plus</a>
                            @can ('disable-announcements')
                                <a href="{{ route('admin.announcements.disable', $announcement) }}" class="btn btn-primary">Cacher</a>
                            @endcan
                       </div>
                   </div>
           @endforeach
       </div>
@endsection
