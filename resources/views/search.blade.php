@extends('Layout\layout')
@section('content')
        <form class="form-horizontal" method="GET" action="TwitterProject/public/">
		   <div class="form-group">
            <label class="col-sm-2 control-label">Search:</label>
            <div class="col-sm-6">
            	<input type="text" name="searching" class="form-control"></input> 
           </div>
              <button type="submit" class="btn btn-primary">Search</button>
        </form>
    <hr>
@foreach($data as $d)
    <ul class="list-group">
    <li><img src="{{ $d->user->profile_image_url }}"> {{ $d->user->screen_name . ", " . $d->user->name }}</li>
    <li>{{ $d->text }}</li>
    <hr>
    </ul>
@endforeach
@endsection