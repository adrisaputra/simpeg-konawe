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
		    	@php 
		    		$n = 0; 
			@endphp
			    @foreach ($data as $v)
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Tahun') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tahun" value="{{ $riwayat_skp[$n]->tahun }}" disabled
									@if($riwayat_skp[$n]->tahun==$sapk[$n]['tahun'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tahun" value="{{ $riwayat_skp[$n]->tahun }}" style="{{ $danger }}" disabled>
								@endif
							@else
								<input type="text" class="form-control" placeholder="Tahun"  style="{{ $danger }}" disabled>
							@endif
						</div>
					</div><br><br><br>
					
					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai SKP') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nilai SKP" value="{{ $riwayat_skp[$n]->nilai_skp }}" disabled
									@if($riwayat_skp[$n]->nilai_skp==$sapk[$n]['nilaiSkp'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nilai SKP" value="{{ $riwayat_skp[$n]->nilai_skp }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['nilaiSkp']=="")
									<input type="text" class="form-control" placeholder="Nilai SKP"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Nilai SKP"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Orientasi Pelayanan') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan" value="{{ $riwayat_skp[$n]->orientasi_pelayanan }}" disabled
									@if($riwayat_skp[$n]->orientasi_pelayanan==$sapk[$n]['orientasiPelayanan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan" value="{{ $riwayat_skp[$n]->orientasi_pelayanan }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['orientasiPelayanan']=="")
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Integritas') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Integritas" value="{{ $riwayat_skp[$n]->integritas }}" disabled
									@if($riwayat_skp[$n]->integritas==$sapk[$n]['integritas'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Integritas" value="{{ $riwayat_skp[$n]->integritas }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['integritas']=="")
									<input type="text" class="form-control" placeholder="Integritas"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Integritas"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Komitmen') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Komitmen" value="{{ $riwayat_skp[$n]->komitmen }}" disabled
									@if($riwayat_skp[$n]->komitmen==$sapk[$n]['komitmen'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Komitmen" value="{{ $riwayat_skp[$n]->komitmen }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['komitmen']=="")
									<input type="text" class="form-control" placeholder="Komitmen"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Komitmen"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Disiplin') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Disiplin" value="{{ $riwayat_skp[$n]->disiplin }}" disabled
									@if($riwayat_skp[$n]->disiplin==$sapk[$n]['disiplin'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Disiplin" value="{{ $riwayat_skp[$n]->disiplin }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['disiplin']=="")
									<input type="text" class="form-control" placeholder="Disiplin"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Disiplin"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Kerja Sama') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Kerja Sama" value="{{ $riwayat_skp[$n]->kerja_sama }}" disabled
									@if($riwayat_skp[$n]->kerja_sama==$sapk[$n]['kerjasama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Kerja Sama" value="{{ $riwayat_skp[$n]->kerja_sama }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['kerjasama']=="")
									<input type="text" class="form-control" placeholder="Kerja Sama"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Kerja Sama"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Perilaku Kerja') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja" value="{{ $riwayat_skp[$n]->nilai_perilaku_kerja }}" disabled
									@if($riwayat_skp[$n]->nilai_perilaku_kerja==$sapk[$n]['nilaiPerilakuKerja'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja" value="{{ $riwayat_skp[$n]->nilai_perilaku_kerja }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['nilaiPerilakuKerja']=="")
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Prestasi Kerja') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja" value="{{ $riwayat_skp[$n]->nilai_prestasi_kerja }}" disabled
									@if($riwayat_skp[$n]->nilai_prestasi_kerja==$sapk[$n]['nilaiPrestasiKerja'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja" value="{{ $riwayat_skp[$n]->nilai_prestasi_kerja }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['nilaiPrestasiKerja']=="")
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Kepemimpinan') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Kepemimpinan" value="{{ $riwayat_skp[$n]->kepemimpinan }}" disabled
									@if($riwayat_skp[$n]->kepemimpinan==$sapk[$n]['kepemimpinan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Kepemimpinan" value="{{ $riwayat_skp[$n]->kepemimpinan }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['kepemimpinan']=="")
									<input type="text" class="form-control" placeholder="Kepemimpinan"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Kepemimpinan"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Jumlah') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Jumlah" value="{{ $riwayat_skp[$n]->jumlah }}" disabled
									@if($riwayat_skp[$n]->jumlah==$sapk[$n]['jumlah'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Jumlah" value="{{ $riwayat_skp[$n]->jumlah }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['jumlah']=="")
									<input type="text" class="form-control" placeholder="Jumlah"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Jumlah"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Rata-rata') }}</label>
							@if($n<$jml_riwayat_skp)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nilai Rata-rata" value="{{ $riwayat_skp[$n]->nilai_rata_rata }}" disabled
									@if($riwayat_skp[$n]->nilai_rata_rata==$sapk[$n]['nilairatarata'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nilai Rata-rata" value="{{ $riwayat_skp[$n]->nilai_rata_rata }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['nilairatarata']=="")
									<input type="text" class="form-control" placeholder="Nilai Rata-rata"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Nilai Rata-rata"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

					</div><br><br><br>

					<hr style="border-top: 1px solid #e0e2e6;">
					@php $n++; @endphp
				@endforeach
              	</div>
              	<!-- /.box-body -->

              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-success btn-flat">Simpan</button> -->
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
              <h3 class="box-title" style="display: contents;font-weight: bold;"><center><p style="font-size:20px">SAPK</p></center></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
		    	@php 
		    		$n = 0; 
			@endphp
			    @foreach ($data as $v)
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Tahun') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Tahun" value="{{ $sapk[$n]['tahun'] }}" disabled
									@if($riwayat_skp[$n]->tahun==$sapk[$n]['tahun'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tahun']=="")
										<input type="text" class="form-control" placeholder="Tahun" value="{{ $sapk[$n]['tahun'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tahun" value="{{ $sapk[$n]['tahun'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Tahun" style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tahun']=="")
										<input type="text" class="form-control" placeholder="Tahun" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tahun" style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>
					
					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai SKP') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai SKP" value="{{ $sapk[$n]['nilaiSkp'] }}" disabled
									@if($riwayat_skp[$n]->nilai_skp==$sapk[$n]['nilaiSkp'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['nilaiSkp']=="")
										<input type="text" class="form-control" placeholder="Nilai SKP" value="{{ $sapk[$n]['nilaiSkp'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai SKP" value="{{ $sapk[$n]['nilaiSkp'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai SKP"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['nilaiSkp']=="")
										<input type="text" class="form-control" placeholder="Nilai SKP"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai SKP"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Orientasi Pelayanan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan" value="{{ $sapk[$n]['orientasiPelayanan'] }}" disabled
									@if($riwayat_skp[$n]->orientasi_pelayanan==$sapk[$n]['orientasiPelayanan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['orientasiPelayanan']=="")
										<input type="text" class="form-control" placeholder="Orientasi Pelayanan" value="{{ $sapk[$n]['orientasiPelayanan'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Orientasi Pelayanan" value="{{ $sapk[$n]['orientasiPelayanan'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Orientasi Pelayanan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['orientasiPelayanan']=="")
										<input type="text" class="form-control" placeholder="Orientasi Pelayanan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Orientasi Pelayanan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Integritas') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Integritas" value="{{ $sapk[$n]['integritas'] }}" disabled
									@if($riwayat_skp[$n]->integritas==$sapk[$n]['integritas'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['integritas']=="")
										<input type="text" class="form-control" placeholder="Integritas" value="{{ $sapk[$n]['integritas'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Integritas" value="{{ $sapk[$n]['integritas'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Integritas"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['integritas']=="")
										<input type="text" class="form-control" placeholder="Integritas"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Integritas"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Komitmen') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Komitmen" value="{{ $sapk[$n]['komitmen'] }}" disabled
									@if($riwayat_skp[$n]->komitmen==$sapk[$n]['komitmen'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['komitmen']=="")
										<input type="text" class="form-control" placeholder="Komitmen" value="{{ $sapk[$n]['komitmen'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Komitmen" value="{{ $sapk[$n]['komitmen'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Komitmen"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['komitmen']=="")
										<input type="text" class="form-control" placeholder="Komitmen"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Komitmen"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Disiplin') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Disiplin" value="{{ $sapk[$n]['disiplin'] }}" disabled
									@if($riwayat_skp[$n]->disiplin==$sapk[$n]['disiplin'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['disiplin']=="")
										<input type="text" class="form-control" placeholder="Disiplin" value="{{ $sapk[$n]['disiplin'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Disiplin" value="{{ $sapk[$n]['disiplin'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Disiplin"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['disiplin']=="")
										<input type="text" class="form-control" placeholder="Disiplin"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Disiplin"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Kerja Sama') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Kerja Sama" value="{{ $sapk[$n]['kerjasama'] }}" disabled
									@if($riwayat_skp[$n]->kerja_sama==$sapk[$n]['kerjasama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['kerjasama']=="")
										<input type="text" class="form-control" placeholder="Kerja Sama" value="{{ $sapk[$n]['kerjasama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Kerja Sama" value="{{ $sapk[$n]['kerjasama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Kerja Sama"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['kerjasama']=="")
										<input type="text" class="form-control" placeholder="Kerja Sama"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Kerja Sama"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Perilaku Kerja') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja" value="{{ $sapk[$n]['nilaiPerilakuKerja'] }}" disabled
									@if($riwayat_skp[$n]->nilai_perilaku_kerja==$sapk[$n]['nilaiPerilakuKerja'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['nilaiPerilakuKerja']=="")
										<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja" value="{{ $sapk[$n]['nilaiPerilakuKerja'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja" value="{{ $sapk[$n]['nilaiPerilakuKerja'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['nilaiPerilakuKerja']=="")
										<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Perilaku Kerja"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Prestasi Kerja') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja" value="{{ $sapk[$n]['nilaiPrestasiKerja'] }}" disabled
									@if($riwayat_skp[$n]->nilai_prestasi_kerja==$sapk[$n]['nilaiPrestasiKerja'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['nilaiPrestasiKerja']=="")
										<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja" value="{{ $sapk[$n]['nilaiPrestasiKerja'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja" value="{{ $sapk[$n]['nilaiPrestasiKerja'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['nilaiPrestasiKerja']=="")
										<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Prestasi Kerja"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Kepemimpinan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Kepemimpinan" value="{{ $sapk[$n]['kepemimpinan'] }}" disabled
									@if($riwayat_skp[$n]->kepemimpinan==$sapk[$n]['kepemimpinan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['kepemimpinan']=="")
										<input type="text" class="form-control" placeholder="Kepemimpinan" value="{{ $sapk[$n]['kepemimpinan'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Kepemimpinan" value="{{ $sapk[$n]['kepemimpinan'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Kepemimpinan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['kepemimpinan']=="")
										<input type="text" class="form-control" placeholder="Kepemimpinan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Kepemimpinan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Jumlah') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Jumlah" value="{{ $sapk[$n]['jumlah'] }}" disabled
									@if($riwayat_skp[$n]->jumlah==$sapk[$n]['jumlah'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['jumlah']=="")
										<input type="text" class="form-control" placeholder="Jumlah" value="{{ $sapk[$n]['jumlah'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jumlah" value="{{ $sapk[$n]['jumlah'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Jumlah"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['jumlah']=="")
										<input type="text" class="form-control" placeholder="Jumlah"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jumlah"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nilai Rata-rata') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Rata-rata" value="{{ $sapk[$n]['nilairatarata'] }}" disabled
									@if($riwayat_skp[$n]->nilai_rata_rata==$sapk[$n]['nilairatarata'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['nilairatarata']=="")
										<input type="text" class="form-control" placeholder="Nilai Rata-rata" value="{{ $sapk[$n]['nilairatarata'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Rata-rata" value="{{ $sapk[$n]['nilairatarata'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_skp)
									<input type="text" class="form-control" placeholder="Nilai Rata-rata"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['nilairatarata']=="")
										<input type="text" class="form-control" placeholder="Nilai Rata-rata"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nilai Rata-rata"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

					</div><br><br><br>

					<hr style="border-top: 1px solid #e0e2e6;">
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