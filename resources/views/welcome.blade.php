@extends('Layout\layout') @section('content')
<style>
    .advancedsearch {
        display: none;
    }
    
    .advancedsearch {
        margin-top: 60px;
    }
</style>
<div class="searchbox">
    <div class="container">
        <form class="form-horizontal" method="GET" action="/TwitterProject/public/search">
            <div class="form-group">
                <label class="col-sm-2 control-label">Search:</label>
                <div class="col-sm-6">
                    <input type="text" name="search" class="form-control" /> </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Add Language dropdown, @, # filter for queries, products drop down (json), update method controller to work with adv search -->
<div class="advancedsearch">
    <div class="container">
        <form class="form-horizontal" method="GET" action="/TwitterProject/public/search">
            <div class="form-group">
                <label class="col-sm-2 control-label">Advanced Search:</label>
                <div class="col-sm-6">
                    <input type="text" name="advsearch" class="form-control" /> </div>
                <div class="col-sm-6">
                    <label class="col-sm-2 control-label">Language:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" /> </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container" id="advancedbtn">
    <button class="btn btn-primary">Advanced Search</button>
</div>
<hr>
<div class="container">
    <p>Below we have a set amount of data</p>
</div>
<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a class="tabli" href="#home" ariacontrols="home" role="tab" data-toggle="tab">home</a></li>
        <li role="presentation"><a class="tabli" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="container"> @foreach($data as $d)
                <ul class="dataselection">
                    <li><img src="{{ $d->user->profile_image_url }}"> {{ $d->user->screen_name . ", " . $d->user->name }}</li>
                    <li>{{ $d->text }}</li>
                    <hr> </ul> @endforeach </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile"> </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#advancedbtn").click(function () {
            $(".advancedsearch").show();
            $(".searchbox").hide();
            $("#advancedbtn").hide();
        });
    });
</script> @endsection