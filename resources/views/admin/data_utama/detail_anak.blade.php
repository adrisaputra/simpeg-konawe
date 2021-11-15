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
		    @php $n = 0; @endphp
		    		@foreach ($anak as $v)
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Nama') }}</label>
							<input type="text" class="form-control" placeholder="Golongan" value="{{ $anak[$n]['nama'] }}" disabled>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tempat Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $anak[$n]['tempatLahir'] }}" disabled>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lahir') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal SK" value="{{ $anak[$n]['tglLahir'] }}" disabled>
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis Kelamin') }}</label>
							<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $anak[$n]['jenisKelamin'] }}" disabled>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis Anak') }}</label>
							<input type="text" class="form-control" placeholder="Tanggal BKN" value="{{ $anak[$n]['jenisAnak'] }}" disabled>
						</div>
					</div><br><br><br>
					<hr>

					@php $n++; @endphp
				@endforeach

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