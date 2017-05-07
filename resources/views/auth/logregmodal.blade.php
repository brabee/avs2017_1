@extends('welcome')
@section('title', 'Prihlásenie / registrácia užívateľa')


@section('content')

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	     aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						×</button>
					<h4 class="modal-title" id="myModalLabel">
						Prihlásenie / registrácia do zákazok
						{{--<a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a>--}}
					</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#Login" data-toggle="tab">Prihlásenie</a></li>
								<li><a href="#Registration" data-toggle="tab">Registrácia</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="Login">
									<form role="form" class="form-horizontal" method="POST" action="{{ route('login') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<label for="email" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-envelope"></span>
											</label>
											<div class="col-sm-10">
												<input id="email" type="email" class="form-control" name="email"
												       value="{{ old('email') }}" placeholder="Email" required autofocus>

												@if ($errors->has('email'))
													<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif

											</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input id="password" type="password" class="form-control" name="password" placeholder="Heslo" required>

												@if ($errors->has('password'))
													<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif

											</div>
										</div>

										<div class="form-group">
											<label for="remember" class="col-sm-2 control-label"></label>
											<div class="col-sm-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
														Zapamätať heslo
													</label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary btn-sm">
													Prihlásiť
												</button>

												<!--
												&nbsp;
												<a href="{{-- route('password.request') --}}">
													Zabudnuté heslo?
												</a>
												-->
											</div>
										</div>

									</form>
								</div>

								<div class="tab-pane" id="Registration">
									<form role="form" class="form-horizontal"  method="POST" action="{{ route('register') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
											<label for="name" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-user"></span>
											</label>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-md-9">
														<input id="name" name="name" type="text" class="form-control" placeholder="Meno a priezvisko"
														       value="{{ old('name') }}" required autofocus/>

														@if ($errors->has('name'))
															<span class="help-block">
																<strong>{{ $errors->first('name') }}</strong>
															</span>
														@endif

													</div>
												</div>
											</div>
										</div>

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<label for="email" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-envelope"></span>
											</label>
											<div class="col-sm-10">
												<input id="email" type="email" class="form-control" name="email" placeholder="Email"
												       value="{{ old('email') }}" required>

												@if ($errors->has('email'))
													<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif

											</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input id="password" type="password" class="form-control"
												       name="password" placeholder="Heslo" required>

												@if ($errors->has('password'))
													<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif

											</div>
										</div>

										<div class="form-group">
											<label for="password-confirm" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" id="password-confirm"
												       name="password_confirmation" placeholder="Potvrdiť heslo" />
											</div>
										</div>

										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary btn-sm">
													Uložiť a Pokračovať
												</button>
												<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
													Zatvoriť
												</button>
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

@endsection