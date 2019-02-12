
@extends('layouts.app')

@section('content')

<div class="x_content">
    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
        <div class="profile_img">
            <div id="crop-avatar">

                <img class="image-width img-responsive avatar-view" src="{{ asset('images/'.$user->image) }}" alt="Avatar" title="Change the avatar">
            </div>
        </div>
        <h3>{{ $user->name }}</h3>
        <ul class="list-unstyled user_data">
            <li> {{ $user->location }}
            </li>
            <li>
                 {{ $user->age}}
            </li>
            <li>{{ $user->company_school}}
            </li>
        </ul>
        @if($user->id === Auth::id())

        <a class="navbar-brand" href="{{ route('edit_profile') }}" style="font-size:13px">プロフィールを編集</a>
        
        @endif
        <br>

        


    </div>

</div>




<script src="../vendors/jquery/dist/jquery.min.js"></script>

<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../vendors/fastclick/lib/fastclick.js"></script>

<script src="../vendors/nprogress/nprogress.js"></script>

<script src="../vendors/raphael/raphael.min.js"></script>
<script src="../vendors/morris.js/morris.min.js"></script>

<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../build/js/custom.min.js"></script>

@endsection

