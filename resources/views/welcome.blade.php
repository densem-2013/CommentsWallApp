@extends('layouts.master')
@section('content')
    <div style=" margin: 200px 100px 200px 150px;">
        <div class="row">
            <h3 class="navbar-brand">Please register with your favorite social network</h3>
        </div>
        <nav >
            <div class="container-fluid">
                <div style="display: inline-block;">
                    <ul class="nav navbar-nav">
                    <li><a href="{{url('social_login/vkontakte')}}" class="btn btn-default"><i class="fa fa-vk fa-2x" aria-hidden="true"></i>&nbsp;VKontakte</a></li>
                    <li> <a class="btn btn-default" href="/social_login/google"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>&nbsp;Google+</a></li>
                    <li> <a class="btn btn-default" href="{{url('social_login/facebook')}}"><i class="fa fa-facebook-f fa-2x" aria-hidden="true"></i>&nbsp;FaceBook</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" >
            <h3 class="navbar-brand">or go to the overview of the blog without the possibility to make comments &nbsp;
                    <a href="{{url('blog')}}" class="btn btn-default" style="margin: 20px">
                        <i class="fa fa-hand-o-right"></i> &nbsp;Go&nbsp;to&nbsp;Blog
                    </a>
            </h3>
        </div>
    </div>
@stop