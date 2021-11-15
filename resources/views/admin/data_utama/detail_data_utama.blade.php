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
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="display: contents;font-weight: bold;"><center><p style="font-size:20pxpx">SIMPEG KONAWE</p></center></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              	<div class="box-body">
				    
					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Nama') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-3">
							<input type="text" class="form-control" placeholder="Glr Depan" value="{{ $data_utama->gelar_depan }}" 
							@if($data_utama->gelar_depan==$sapk->gelarDepan) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nama" value="{{ $data_utama->nama_pegawai }}"   
							@if($data_utama->nama_pegawai==$sapk->nama) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-3" >
							<input type="text" class="form-control" placeholder="Glr Blkng" value="{{ $data_utama->gelar_belakang }}"  
							@if($data_utama->gelar_belakang==$sapk->gelarBelakang) style="{{ $success }}" @else style="{{ $danger }}" @endif >
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('NIP') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="NIP" value="{{ $data_utama->nip }}"
							@if($data_utama->nip==$sapk->nipBaru) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $data_utama->tempat_lahir }}" 
							@if($data_utama->tempat_lahir==$sapk->tempatLahir) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="{{ date('d-m-Y', strtotime($data_utama->tanggal_lahir)) }}" 
							@if(date('d-m-Y', strtotime($data_utama->tanggal_lahir))==$sapk->tglLahir) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Jenis Kelamin') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Jenis Kelamin" value="{{ $data_utama->jenis_kelamin }}" 
							@if($data_utama->jenis_kelamin==$sapk->jenisKelamin) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Golongan Akhir') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Golongan Akhir" value="{{ $data_utama->golongan_akhir }}"
							@if($data_utama->golongan_akhir==$sapk->golRuangAkhir) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Email') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12  @if($data_utama->email==$sapk->email) has-success @else has-error @endif">
							<input type="text" class="form-control" placeholder="Email" value="{{ $data_utama->email }}" >
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('NIK') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12 @if($data_utama->nik==$sapk->nik) has-success @else has-error @endif">
							<input type="text" class="form-control" placeholder="NIK" value="{{ $data_utama->nik }}" >
						</div>
					</div>
              	</div>
              	<!-- /.box-body -->

              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-success btn-flat">Simpan</button> -->
                <!-- <a href="{{ url('/'.Request::segment(1).'/search?search='.$data_utama->nip) }}"class="btn btn-warning btn-flat">Kembali</a> -->
                <a href="{{ url()->previous() }}"class="btn btn-warning btn-flat">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="display: contents;font-weight: bold;"><center><p style="font-size:20pxpx">SAPK</p></center></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
		    	<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Nama') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-3">
							<input type="text" class="form-control" placeholder="Glr Depan" value="{{ $sapk->gelarDepan }}" disabled 
							@if($data_utama->gelar_depan==$sapk->gelarDepan) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nama" value="{{ $sapk->nama }}" disabled 
							@if($data_utama->nama_pegawai==$sapk->nama) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-3" >
							<input type="text" class="form-control" placeholder="Glr Blkng" value="{{ $sapk->gelarBelakang }}" disabled
							@if($data_utama->gelar_belakang==$sapk->gelarBelakang) style="{{ $success }}" @else style="{{ $danger }}" @endif >
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('NIP') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="NIP" value="{{ $sapk->nipBaru }}" disabled
							@if($data_utama->nip==$sapk->nipBaru) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $sapk->tempatLahir }}" disabled
							@if($data_utama->tempat_lahir==$sapk->tempatLahir) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="{{ $sapk->tglLahir }}" disabled
							@if(date('d-m-Y', strtotime($data_utama->tanggal_lahir))==$sapk->tglLahir) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Jenis Kelamin') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Jenis Kelamin" value="{{ $sapk->jenisKelamin }}" disabled
							@if($data_utama->jenis_kelamin==$sapk->jenisKelamin) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Golongan Akhir') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Golongan Akhir" value="{{ $sapk->golRuangAkhir }}" disabled
							@if($data_utama->golongan_akhir==$sapk->golRuangAkhir) style="{{ $success }}" @else style="{{ $danger }}" @endif >
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Email') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12  @if($data_utama->email==$sapk->email) has-success @else has-error @endif">
							<input type="text" class="form-control" placeholder="Email" value="{{ $sapk->email }}" disabled>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('NIK') }}</label>
						</div>
					</div>
					<div class="form-group ">
						<div class="col-sm-12 @if($data_utama->nik==$sapk->nik) has-success @else has-error @endif">
							<input type="text" class="form-control" placeholder="NIK" value="{{ $sapk->nik }}" disabled >
						</div>
					</div>
              </div>
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection