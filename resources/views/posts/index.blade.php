@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}">Dashboard</a>
                </li>
                <li class="active">Posts</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Posts
                        <span class="pull-right">
                            <a class="btn btn-xs btn-default" href="{{ route('posts.create') }}">Tambah</a>
                        </span>
                    </h2>
                </div>
                
                <div class="panel-body"></div>

            </div>
        </div>
    </div>
</div>
@endsection