@extends ('private.layouts.app')

@section('content')
    <div class="container">

<h1>Edit Home</h1>
<form action="{{ route('home.update', shome-id) }}" method="POST" enctype="multipart/fors-date">
    @csrt
    @method('PUT')
    <div class="form-group">
        <label for=title_1>Title 1:<label>
        <input type="text" names="title_1" class="form-control" value="{{ $home->title_1 }}" required>
    </div>
    <div class="form-group">
        <label for="title_2">Title 2:</label>
        <input type="text" name="title_2" class="form-control" value="{{ $home->title_2 }}" required>
    </div>
    <div class="form-group">
        <label for="title_3">Title 3:</label>
        <input type="text" name="title_3" class="form-control" value="{{ $home->title_3 }}" required>

    </div >
    <div class="form-group">
        <label for="button_left">Button Left:</label>
        <input type="text" name="button_left" class="form-control" value="{{ $home->button_left }}" required>
    </div>

    <div class="form-group">
        <label for="button_right">Button Right:</label>
        <input type="text" name="button_right" class="form-control" value="{{ $home->button_right }}" required>
    </div>

    <div class="form-group">
        <label for="about_me_title">About Me Title:</label>
        <input type="text" name="about_me_title" class="form-control" value="{{ $home->about_me_title }}" required>
    </div>

    <div class="form-group">
        <label for="about_me_description">About Me Description:</label>
        <textarea type="text" name="about_me_description" class="form-control" required>{{$home->about_me_description }}</textarea>
    </div>

    <div class="form-group">
        <label for="image_path">Profile Image:</label>
        <input type="text" name="image_path" class="form-control" 