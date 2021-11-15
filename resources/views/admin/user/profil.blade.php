@extends('admin.layout')
@section('konten')
<div class="content-wrapper">
<section class="content-header">
	<h1 class="fontPoppins">{{ __($title) }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
		<li><a href="#"> {{ __($title) }}</a></li>
	</ol>
	</section>

	<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Edit {{ __($title) }}</h3>
		</div>

		<form action="{{ url('/'.Request::segment(1).'/edit_profil/'.$user->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		
			<div class="box-body">

				@if ($message = Session::get('status'))
					<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Berhasil !</h4>
						{{ $message }}
					</div>
				@endif

				<div class="col-lg-12">
					
					<div class="form-group @if ($errors->has('name')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Nama User') }}</label>
						<div class="col-sm-9">
							@if ($errors->has('name'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('name') }}</label>@endif
							@if(Auth::user()->group==3)
								<input type="text" class="form-control" placeholder="Nama User" value="{{ $user->name }}" disabled>
								<input type="hidden" class="form-control" placeholder="Nama User" name="name" value="{{ $user->name }}" >
							@else
								<input type="text" class="form-control" placeholder="Nama User" name="name" value="{{ $user->name }}" >
							@endif
							<input type="hidden" class="form-control" placeholder="Nama User" name="name2" value="{{ $user->name }}" >
						</div>
					</div>
					
					<div class="form-group @if ($errors->has('email')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Email') }}</label>
						<div class="col-sm-9">
							@if ($errors->has('email'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>@endif
							<input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}" >
						</div>
					</div>
					
					<div class="form-group @if ($errors->has('foto')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Foto User ') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-4">
							@if ($errors->has('foto'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('foto_formal') }}</label>@endif
							<input type="file" class="form-control" placeholder="Foto" name="foto" value="{{ $user->foto }}" >
							<span style="font-size:11px"><i>Ukuran File Tidak Boleh Lebih Dari 300 Kb (jpg,jpeg,png)</i></span>
							@if($user->foto)
								<img src="{{ asset('upload/foto/'.$user->foto) }}" width="150px" height="150px">
							@endif
						</div>
					</div>

					<hr style="border-top: 1px solid #d4d8e0;">

					<div class="form-group @if ($errors->has('current-password')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Password Lama') }}</label>
						<div class="col-sm-9">
							@if ($errors->has('current-password'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('current-password') }}</label>@endif
							<input type="password" class="form-control" placeholder="Password" name="current-password" >
						</div>
					</div>
					
					<div class="form-group @if ($errors->has('password')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Password Baru') }}</label>
						<div class="col-sm-9">
							@if ($errors->has('password'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('password') }}</label>@endif
							<input type="password" class="form-control" placeholder="Password" name="password" >
						</div>
					</div>
					
					<div class="form-group @if ($errors->has('password_confirmation')) has-error @endif">
						<label class="col-sm-3 control-label">{{ __('Konfirmasi Password') }}</label>
						<div class="col-sm-9">
							@if ($errors->has('password_confirmation'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('password_confirmation') }}</label>@endif
							<input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" >
						</div>
					</div>

					<div class="form-group @if ($errors->has('group')) has-error @endif">
						<label class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
							<div>
								<button type="submit" class="btn btn-primary btn-flat btn-sm" title="Tambah Data"> Simpan</button>
								<button type="reset" class="btn btn-danger btn-flat btn-sm" title="Reset Data"> Reset</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</form>
	</div>
	</section>
</div>

@endsection