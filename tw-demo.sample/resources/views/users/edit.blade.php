@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザ登録</div>

                <form action="/update" method="post">

                    <!-- @TODO ユーザー登録フォームを表示する -->
                    @include('users._form')
                    <input class="btn btn-primary" style="margin:5px"  type="submit" value="修正">

                    @csrf
                </form>


            </div>
        </div>
    </div>
</div>

@endsection
