@extends('welcome')

@section('tlacidlo')
	<!-- Button trigger modal -->
	<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalHorizontal">
		Prihlásenie
	</button>
@endsection

@section('content')
	<!-- Modal -->
	<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
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
						Modal title
					</h4>
				</div>

				<!-- Modal Body -->
				<div class="modal-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label  class="col-sm-2 control-label"
							        for="email">Email</label>
							<div class="col-sm-10">
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
							<label class="col-sm-2 control-label"
							       for="password" >Heslo</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="password"
								       id="password" placeholder="Password" required>

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
										<input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Zapamätať prihlásenie
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Prihlásiť</button>
								<a class="btn btn-link" href="{{ route('password.request') }}">
									Zabudol si heslo?
								</a>
							</div>
						</div>
					</form>






				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default"
					        data-dismiss="modal">
						Close
					</button>
					<button type="button" class="btn btn-primary">
						Save changes
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Post Info -->
	<div style='position:fixed;bottom:0;left:0; background:lightgray;width:100%;'>
		About this SO Question:
		<a href='http://stackoverflow.com/q/26562900/1366033'>
			Twitter Bootstap - form in Modal fomatting
		</a><br/>
		Fork This Skeleton Here:
		<a href='http://jsfiddle.net/KyleMit/kcpma/'>
			Bootstrap 3 Skeleton
		</a><br/>
	</div>

@endsection
