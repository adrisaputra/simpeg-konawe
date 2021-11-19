@extends('admin.layout')
@section('konten')

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-blue"></div>
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ __($title) }}</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ url('/pegawai') }}">Pegawai</a>
                  </li>
                  <li class="breadcrumb-item active">{{ __($title) }}
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
	   
	   	<form action="{{ url('/'.Request::segment(1).'/edit/'.$user->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		
        <div class="col s12">
          <div class="container">
			<div class="section">
				<!-- Input Fields -->
				<div class="row">
				<div class="col s12">
				<div id="input-fields" class="card card-tabs">
					<div class="card-content">
						
						<div id="view-input-fields">
							<div class="row">
								<form class="row">
									<p style="text-align:center;font-size:20px;font-weight:bold">DATA PRIBADI</p>
									<div class="col s12">
										<div class="input-field col s12">
											<label for="name">{{ __('Nama User') }}</label>
											@if($user->group=="3")
												<input type="text" id="name" value="{{ $user->name }}" style="@if ($errors->has('name'))border-bottom: 2px solid #ff5252;@else color: black; @endif" disabled>
												<input type="hidden" name="name" value="{{ $user->name }}" style="color: black;">
											@else
												<input type="text" id="name" name="name" value="{{ $user->name }}" style="@if ($errors->has('name'))border-bottom: 2px solid #ff5252;@else color: black; @endif">
											@endif
											<input type="hidden" name="name2" value="{{ $user->name }}" style="color: black;">
											@if ($errors->has('name'))<small><div class="error">{{ $errors->first('name') }}</div></small>@endif
										</div>
										<div class="input-field col s12">
											<label for="email">{{ __('Email') }}</label>
											<input type="text" id="email" name="email" value="{{ $user->email }}" style="@if ($errors->has('email'))border-bottom: 2px solid #ff5252;@else color: black; @endif">
											@if ($errors->has('email'))<small><div class="error">{{ $errors->first('email') }}</div></small>@endif
										</div>
										<div class="input-field col s12">
											<label for="password">{{ __('Password') }}</label>
											<input type="password" id="password" name="password" style="@if ($errors->has('password'))border-bottom: 2px solid #ff5252;@else color: black; @endif">
											@if ($errors->has('password'))<small><div class="error">{{ $errors->first('password') }}</div></small>@endif
										</div>
										<div class="input-field col s12">
											<label for="password_confirmation">{{ __('Konfirmasi Password') }}</label>
											<input type="password" id="password_confirmation" name="password_confirmation" style="@if ($errors->has('password_confirmation'))border-bottom: 2px solid #ff5252;@else color: black; @endif">
											@if ($errors->has('password_confirmation'))<small><div class="error">{{ $errors->first('password_confirmation') }}</div></small>@endif
										</div>
										<div class="col s12">
											<label>{{ __('Group') }}</label>
											<select class="form-control" name="group">
												<option value="1" @if($user->group =="1") selected @endif>Administrator</option>
												<option value="2" @if($user->group =="2") selected @endif>Operator</option>
											</select>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
				</div>
			</div>
			<div style="bottom: 90px; right: 19px;" class="fixed-action-btn direction-top">
				<button type="submit" class="btn-floating btn-large waves-effect waves-light green darken-2"><i class="material-icons">save</i></button>
				<a href="{{ url()->previous() }}" class="btn-floating btn-large waves-effect waves-light red darken-2"><i class="material-icons">arrow_back</i></a>
			</div>
          </div>
		</form>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

@endsection