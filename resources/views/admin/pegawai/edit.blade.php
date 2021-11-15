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
		
		<form action="{{ url('/'.Request::segment(1).'/edit/'.$pegawai->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		
			<div class="box-body">
				<div class="col-lg-12">

					<center><p style="font-size:20px">DATA PRIBADI</p></center>

					<div class="form-group @if ($errors->has('nip')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('NIP') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('nip'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('nip') }}</label>@endif
							<input type="text" class="form-control" placeholder="NIP" name="nip" value="{{ $pegawai->nip }}" >
							<input type="hidden" class="form-control" placeholder="NIP" name="nip2" value="{{ $pegawai->nip }}" >
						</div>
					</div>

					<div class="form-group @if ($errors->has('nama_pegawai')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Nama Pegawai') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('nama_pegawai'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('nama_pegawai') }}</label>@endif
							<input type="text" class="form-control" placeholder="Nama Pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" >
						</div>
					</div>

					<div class="form-group @if ($errors->has('tempat_lahir')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Tempat Lahir') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('tempat_lahir'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('tempat_lahir') }}</label>@endif
							<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ $pegawai->tempat_lahir }}" >
						</div>
					</div>

					<div class="form-group @if ($errors->has('tanggal_lahir')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Tanggal Lahir') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('tanggal_lahir'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('tanggal_lahir') }}</label>@endif
							<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
								<input type="text" class="form-control datepicker" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}">
							</div>
						</div>
					</div>

					<div class="form-group @if ($errors->has('jenis_kelamin')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Jenis Kelamin') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('jenis_kelamin'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('jenis_kelamin') }}</label>@endif
							<select class="form-control select2" name="jenis_kelamin">
								<option value=""> -Pilih Jenis Kelamin-</option>
								<option value="Pria" @if($pegawai->jenis_kelamin=="Pria") selected @endif> Pria</option>
								<option value="Wanita" @if($pegawai->jenis_kelamin=="Wanita") selected @endif> Wanita</option>
							
							</select>
						</div>
					</div>

					<div class="form-group @if ($errors->has('alamat')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Alamat') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('alamat'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('alamat') }}</label>@endif
							<textarea class="form-control" placeholder="Alamat" name="alamat">{{ $pegawai->alamat }}</textarea>
						</div>
					</div>

					<div class="form-group @if ($errors->has('agama')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Agama') }} <span class="required" style="color: #dd4b39;">*</span></label>
						<div class="col-sm-10">
							@if ($errors->has('agama'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('agama') }}</label>@endif
							<select class="form-control select2" name="agama">
								<option value=""> -Pilih Agama-</option>
								<option value="Islam" @if($pegawai->agama=="Islam") selected @endif> Islam</option>
								<option value="Katolik" @if($pegawai->agama=="Katolik") selected @endif> Katolik</option>
								<option value="Hindu" @if($pegawai->agama=="Hindu") selected @endif> Hindu</option>
								<option value="Budha" @if($pegawai->agama=="Budha") selected @endif> Budha</option>
								<option value="Sinto" @if($pegawai->agama=="Sinto") selected @endif> Sinto</option>
								<option value="Konghucu" @if($pegawai->agama=="Konghucu") selected @endif> Konghucu</option>
								<option value="Protestan" @if($pegawai->agama=="Protestan") selected @endif> Protestan</option>
							</select>
						</div>
					</div>

					<div class="form-group @if ($errors->has('gol_darah')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Gol. Darah') }}</label>
						<div class="col-sm-10">
							@if ($errors->has('gol_darah'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('gol_darah') }}</label>@endif
							<select class="form-control select2" name="gol_darah">
								<option value=""> -Pilih Gol. Darah-</option>
								<option value="A" @if($pegawai->gol_darah=="A") selected @endif> A</option>
								<option value="B" @if($pegawai->gol_darah=="B") selected @endif> B</option>
								<option value="AB" @if($pegawai->gol_darah=="AB") selected @endif> AB</option>
								<option value="O" @if($pegawai->gol_darah=="O") selected @endif> O</option>
							
							</select>
						</div>
					</div>

					<div class="form-group @if ($errors->has('email')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Email') }}</label>
						<div class="col-sm-10">
							@if ($errors->has('email'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>@endif
							<input type="email" class="form-control" placeholder="Email" name="email" value="{{ $pegawai->email }}" >
						</div>
					</div>

					<div class="form-group @if ($errors->has('foto_formal')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Foto Formal') }}</label>
						<div class="col-sm-4">
							@if ($errors->has('foto_formal'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('foto_formal') }}</label>@endif
							<input type="file" class="form-control" placeholder="Foto" name="foto_formal" value="{{ $pegawai->foto_formal }}" >
							<span style="font-size:11px"><i>Ukuran File Tidak Boleh Lebih Dari 500 Kb (jpg,jpeg,png)</i></span>
							@if($pegawai->foto_formal)
								<img src="{{ asset('storage/upload/foto_formal_pegawai/thumbnail/'.$pegawai->foto_formal) }}" width="150px" height="150px">
							@endif
						</div>
					</div>

					<div class="form-group @if ($errors->has('foto_kedinasan')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Foto Kedinasan') }}</label>
						<div class="col-sm-4">
							@if ($errors->has('foto_kedinasan'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('foto_formal') }}</label>@endif
							<input type="file" class="form-control" placeholder="Foto" name="foto_kedinasan" value="{{ $pegawai->foto_kedinasan }}" >
							<span style="font-size:11px"><i>Ukuran File Tidak Boleh Lebih Dari 500 Kb (jpg,jpeg,png)</i></span>
							@if($pegawai->foto_kedinasan)
								<img src="{{ asset('storage/upload/foto_kedinasan_pegawai/thumbnail/'.$pegawai->foto_kedinasan) }}" width="150px" height="150px">
							@endif
						</div>
					</div>

					<div class="form-group @if ($errors->has('status')) has-error @endif">
						<label class="col-sm-2 control-label">{{ __('Status Kepegawaian') }}</label>
						<div class="col-sm-10">
							@if ($errors->has('status'))<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('status') }}</label>@endif
							<select class="form-control select2" name="status">
								<option value=""> -Pilih Status Kepegawaian-</option>
								<option value="PNS" @if($pegawai->status=="PNS") selected @endif> PNS</option>
								<option value="CPNS" @if($pegawai->status=="CPNS") selected @endif> CPNS</option>
							</select>
							
							<div style="padding-top:10px">
								<button type="submit" class="btn btn-primary btn-flat btn-sm" title="Tambah Data"> Simpan</button>
								<button type="reset" class="btn btn-danger btn-flat btn-sm" title="Reset Data"> Reset</button>
								<a href="{{ url('/'.Request::segment(1)) }}" class="btn btn-warning btn-flat btn-sm" title="Kembali">Kembali</a>
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