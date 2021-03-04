@extends('layouts.app')

@section('content')
    @include('layouts.includes.form-errors')

    <div>
        <p>#{{$announcement->id}} {{$announcement->titile}} {{$announcement->user_id}}</p>
        <form method="post" action=" {{route('admin.announcements.update', ['id'=>$announcement->id])}}">
            @csrf
            @method('PUT')
            @if($announcement->enabled == 1)
              <input type="radio" id="disable" name="disable" value="disable" checked>
              <label for="disable">Disable</label>
            @elseif ($announcement->enabled == 0)
            <input type="radio" id="enable" name="enable" value="enable" checked>
            <label for="enable">Enable</label>
            @endif

    
            <input type="submit" class="btn btn-success">
        </form>
    </div>

@endsection
