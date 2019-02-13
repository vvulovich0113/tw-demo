@extends('layouts.app')

@section('content')

<div class="my_form" style="margin:0 auto;width:60vw;">
    <form method="POST" action="/edit/update" accept-charset="UTF-8" id="" enctype="multipart/form-data">

        <input type="file" name="photo">
        <label class="label" for="name">名前</label>
        <input id="name" type="text" name="name" value="{{$user->name}}">
        <label class="label" for="location">所在地</label>
        <input id="location" type="text" name="location" value="{{$user->location}}">
        <label class="label" for="age">年齢</label>
        <input id="age" type="number" name="age" value="{{$user->age}}">
        <label class="label" for="company_school">会社名or学校名</label>
        <input  id="company_school" type="text" name="company_school" value="{{$user->company_school}}">
        <br>
        <input class="btn btn-primary" type="submit">
        @csrf
    </form>
</div>


@endsection

