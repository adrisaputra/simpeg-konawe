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
							<label class="control-label" for="inputSuccess"> {{ __('Tingkat Pendidikan') }}</label>
							@if($n<$jml_riwayat_pendidikan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tingkat Pendidikan" value="{{ $riwayat_pendidikan[$n]->nama_tingkat_pendidikan }}" disabled
									@if($riwayat_pendidikan[$n]->nama_tingkat_pendidikan==$sapk[$n]['tkPendidikanNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tingkat Pendidikan" value="{{ $riwayat_pendidikan[$n]->nama_tingkat_pendidikan }}" style="{{ $danger }}" disabled>
								@endif
							@else
								<input type="text" class="form-control" placeholder="Tingkat Pendidikan"  style="{{ $danger }}" disabled>
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Nama Pendidikan') }}</label>
							@if($n<$jml_riwayat_pendidikan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nama Pendidikan" value="{{ $riwayat_pendidikan[$n]->nama_pendidikan }}" disabled
									@if($riwayat_pendidikan[$n]->nama_pendidikan==$sapk[$n]['pendidikanNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nama Pendidikan" value="{{ $riwayat_pendidikan[$n]->nama_pendidikan }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['pendidikanNama']=="")
									<input type="text" class="form-control" placeholder="Nama Pendidikan"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Nama Pendidikan"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>
					</div><br><br><br>

					
					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lulus') }}</label>
							@if($n<$jml_riwayat_pendidikan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tanggal Lulus" value="@if($riwayat_pendidikan[$n]->tanggal_lulus){{ date('d-m-Y', strtotime($riwayat_pendidikan[$n]->tanggal_lulus)) }}@endif" disabled
									@if(date('d-m-Y', strtotime($riwayat_pendidikan[$n]->tanggal_lulus))==$sapk[$n]['tglLulus'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tanggal Lulus" value="@if($riwayat_pendidikan[$n]->tanggal_lulus){{ date('d-m-Y', strtotime($riwayat_pendidikan[$n]->tanggal_lulus)) }}@endif" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['tglLulus']=="")
									<input type="text" class="form-control" placeholder="Tanggal Lulus"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Tanggal Lulus"  style="{{ $danger }}" disabled>
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tahun Lulus') }}</label>
							@if($n<$jml_riwayat_pendidikan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tahun Lulus" value="{{ $riwayat_pendidikan[$n]->tahun_lulus }}" disabled
									@if($riwayat_pendidikan[$n]->tahun_lulus==$sapk[$n]['tahunLulus'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tahun Lulus" value="{{ $riwayat_pendidikan[$n]->nama_pendidikan }}" style="{{ $danger }}" disabled>
								@endif
							@else
								@if($sapk[$n]['tahunLulus']=="")
									<input type="text" class="form-control" placeholder="Tahun Lulus"  style="{{ $success }}" disabled>
								@else
									<input type="text" class="form-control" placeholder="Tahun Lulus"  style="{{ $danger }}" disabled>
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
							<label class="control-label" for="inputSuccess"> {{ __('Tingkat Pendidikan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tingkat Pendidikan" value="{{ $sapk[$n]['tkPendidikanNama'] }}" disabled
									@if($riwayat_pendidikan[$n]->nama_tingkat_pendidikan==$sapk[$n]['tkPendidikanNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tkPendidikanNama']=="")
										<input type="text" class="form-control" placeholder="Tingkat Pendidikan" value="{{ $sapk[$n]['tkPendidikanNama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tingkat Pendidikan" value="{{ $sapk[$n]['tkPendidikanNama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tingkat Pendidikan" style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tkPendidikanNama']=="")
										<input type="text" class="form-control" placeholder="Tingkat Pendidikan" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tingkat Pendidikan" style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>
					
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Nama Pendidikan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Nama Pendidikan" value="{{ $sapk[$n]['pendidikanNama'] }}" disabled
									@if($riwayat_pendidikan[$n]->nama_pendidikan==$sapk[$n]['pendidikanNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['pendidikanNama']=="")
										<input type="text" class="form-control" placeholder="Nama Pendidikan" value="{{ $sapk[$n]['pendidikanNama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nama Pendidikan" value="{{ $sapk[$n]['pendidikanNama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Nama Pendidikan" style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['pendidikanNama']=="")
										<input type="text" class="form-control" placeholder="Nama Pendidikan" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nama Pendidikan" style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>
					
					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal Lulus') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tanggal Lulus" value="@if($sapk[$n]['tglLulus']){{ date('d-m-Y', strtotime($sapk[$n]['tglLulus'])) }}@endif" disabled
									@if(date('d-m-Y', strtotime($riwayat_pendidikan[$n]->tanggal_lulus))==$sapk[$n]['tglLulus'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tglLulus']=="")
										<input type="text" class="form-control" placeholder="Tanggal Lulus" value="@if($sapk[$n]['tglLulus']){{ date('d-m-Y', strtotime($sapk[$n]['tglLulus'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal Lulus" value="@if($sapk[$n]['tglLulus']){{ date('d-m-Y', strtotime($sapk[$n]['tglLulus'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tanggal Lulus"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tglLulus']=="")
										<input type="text" class="form-control" placeholder="Tanggal Lulus"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal Lulus"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tahun Lulus') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tahun Lulus" value="{{ $sapk[$n]['tahunLulus'] }}" disabled
									@if($riwayat_pendidikan[$n]->tahun_lulus==$sapk[$n]['tahunLulus'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tahunLulus']=="")
										<input type="text" class="form-control" placeholder="Tahun Lulus" value="{{ $sapk[$n]['tahunLulus'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tahun Lulus" value="{{ $sapk[$n]['tahunLulus'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_pendidikan)
									<input type="text" class="form-control" placeholder="Tahun Lulus"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tahunLulus']=="")
										<input type="text" class="form-control" placeholder="Tahun Lulus"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tahun Lulus"  style="{{ $danger }}" disabled>
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