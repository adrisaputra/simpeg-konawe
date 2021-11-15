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
							<label>{{ __('Nama Ayah') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Ayah" value="@if($orang_tua){{ $orang_tua->nama_ayah }}@endif"
							@if($orang_tua)
								@if($orang_tua->nama_ayah==$ayah->nama ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="@if($orang_tua){{ $orang_tua->tempat_lahir_ayah }}@endif"
							@if($orang_tua)
								@if($orang_tua->tempat_lahir_ayah==$ayah->tempatLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="@if($orang_tua){{ $orang_tua->tanggal_lahir_ayah }}@endif"
							@if($orang_tua)
								@if($orang_tua->tanggal_lahir_ayah==$ayah->tglLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Nama Ibu') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Ibu" value="@if($orang_tua){{ $orang_tua->nama_ibu }}@endif"
							@if($orang_tua)
								@if($orang_tua->nama_ibu==$ibu->nama ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="@if($orang_tua){{ $orang_tua->tempat_lahir_ibu }}@endif"
							@if($orang_tua)
								@if($orang_tua->tempat_lahir_ibu==$ibu->tglLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="@if($orang_tua){{ $orang_tua->tanggal_lahir_ibu }}@endif"
							@if($orang_tua)
								@if($orang_tua->tanggal_lahir_ibu==$ibu->tglLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
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
							<label>{{ __('Nama Ayah') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Ayah" value="{{ $ayah->nama }}" disabled
							@if($orang_tua)
								@if($orang_tua->nama_ayah==$ayah->nama ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $ayah->tempatLahir }}" disabled
							@if($orang_tua)
								@if($orang_tua->tempat_lahir_ayah==$ayah->tempatLahir) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="{{ $ayah->tglLahir }}" disabled
							@if($orang_tua)
								@if($orang_tua->tanggal_lahir_ayah==$ayah->tglLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group">
						<div class="col-sm-12">
							<label>{{ __('Nama Ibu') }}</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12" >
							<input type="text" class="form-control" placeholder="Nama Ibu" value="{{ $ibu->nama }}" disabled
							@if($orang_tua)
								@if($orang_tua->nama_ibu==$ibu->nama ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir" value="{{ $ibu->tempatLahir }}" disabled
							@if($orang_tua)
								@if($orang_tua->tempat_lahir_ibu==$ibu->tempatLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal Lahir" value="{{ $ibu->tglLahir }}" disabled
							@if($orang_tua)
								@if($orang_tua->tanggal_lahir_ibu==$ibu->tglLahir ) style="{{ $success }}" @else style="{{ $danger }}" @endif
							@else
								style="{{ $success }}"
							@endif>
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