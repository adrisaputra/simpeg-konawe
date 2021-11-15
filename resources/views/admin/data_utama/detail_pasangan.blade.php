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
							<label>{{ __('Nama Pasangan') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Pasangan" value="{{ $riwayat_pasangan[0]->nama_pasangan }}"
							@if($riwayat_pasangan[0]->nama_pasangan==$pasangan[0]['dataOrang']['nama']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Tempat Lahir') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $riwayat_pasangan[0]->tempat_lahir }}"
							@if($riwayat_pasangan[0]->tempat_lahir==$pasangan[0]['dataOrang']['tempatLahir']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="@if($riwayat_pasangan[0]->tanggal_lahir){{ date('d-m-Y', strtotime($riwayat_pasangan[0]->tanggal_lahir)) }}@endif"
							@if($riwayat_pasangan[0]->tanggal_lahir==$pasangan[0]['dataOrang']['tglLahir']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Menikah') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Menikah" value="@if($riwayat_pasangan[0]->tanggal_menikah){{ date('d-m-Y', strtotime($riwayat_pasangan[0]->tanggal_menikah)) }}@endif"
							@if($riwayat_pasangan[0]->tanggal_menikah==$pasangan[0]['dataPernikahan']['tgglMenikah']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>
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
							<label>{{ __('Nama Pasangan') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Pasangan" value="{{ $pasangan[0]['dataOrang']['nama'] }}" disabled
							@if($riwayat_pasangan[0]->nama_pasangan==$pasangan[0]['dataOrang']['nama']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Tempat Lahir') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $pasangan[0]['dataOrang']['tempatLahir'] }}" disabled
							@if($riwayat_pasangan[0]->tempat_lahir==$pasangan[0]['dataOrang']['tempatLahir']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="@if($pasangan[0]['dataOrang']['tglLahir']){{ date('d-m-Y', strtotime($pasangan[0]['dataOrang']['tglLahir'])) }}@endif" disabled
							@if($riwayat_pasangan[0]->tanggal_lahir==$pasangan[0]['dataOrang']['tglLahir']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Menikah') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Menikah" value="@if($pasangan[0]['dataPernikahan']['tgglMenikah']){{ date('d-m-Y', strtotime($pasangan[0]['dataPernikahan']['tgglMenikah'])) }}@endif" disabled
							@if($riwayat_pasangan[0]->tanggal_menikah==$pasangan[0]['dataPernikahan']['tgglMenikah']) style="{{ $success }}" @else style="{{ $danger }}" @endif>
						</div>
					</div><br><br><br>

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