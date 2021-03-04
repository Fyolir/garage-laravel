@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="{{ route('user.update.reservations', $vehicle) }}">
                @csrf
                <div class="form-group">
                    <label for="">A quand souhaitez vous prolonger la réservation ?</label>
                    <input  class="form-control" type="date" name="ending_at" value="{{$vehicle->ended_at}}">
                </div>
                <button type="submit" class="btn btn-primary">prolonger</button>
            </form>
        </div>

        @include('layouts.includes.form-errors')
    </div>
@endsection
