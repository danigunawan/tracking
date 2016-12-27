@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li class="active">Tambah Tugas</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Tambah  Tugas</h2>
</div>
<div class="panel-body">
   {!! Form::open(['url' => route('tugas.store'),
                    'method' => 'post', 'class'=>'form-horizontal']) !!}
                    @include('tugas._form_member')


                    {!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection
