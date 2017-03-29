@extends('welcome')

@section('content')
	<!-- Modal -->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
	     aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close"
					        data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						Registrácia nového užívateľa
					</h4>
				</div>

				<!-- Modal Body -->
				<div class="modal-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label  class="col-sm-2 control-label" for="email">
								<span class="glyphicon glyphicon-envelope"></span>
							</label>
							<div class="col-sm-6">
								<input type="email"  name="email" class="form-control"
								       id="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
								@if ($errors->has('email'))
									<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label class="col-sm-2 control-label" for="password">
								<span class="glyphicon glyphicon-lock"></span>
							</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" name="password"
								       id="password" placeholder="Heslo" required>
								@if ($errors->has('password'))
									<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
										Zostať prihlásený
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">
									Prihlásiť
								</button>
								<a class="btn btn-link" href="{{ route('password.request') }}">
									Zabudol si heslo?
								</a>
								<button type="button" class="btn btn-default pull-right" data-dismiss="modal"  id="right-panel-link">
									Zatvoriť
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
