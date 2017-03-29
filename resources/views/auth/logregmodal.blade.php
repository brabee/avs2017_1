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
						<a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a>
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
									<form role="form" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-envelope"></span>
											</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="email1" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Heslo" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary btn-sm">
													Prihlásiť
												</button>
												&nbsp;
												<a href="javascript:;">
													Zabudnuté heslo?
												</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="Registration">
									<form role="form" class="form-horizontal">
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-user"></span>
											</label>
											<div class="col-sm-10">
												<div class="row">
													<div class="col-md-9">
														<input type="text" class="form-control" placeholder="Meno a priezvisko" />
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-envelope"></span>
											</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="password" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" id="password" placeholder="Heslo" />
											</div>
										</div>
										<div class="form-group">
											<label for="password" class="col-sm-2 control-label">
												<span class="glyphicon glyphicon-lock"></span>
											</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" id="password" placeholder="Potvrdiť heslo" />
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-10">
												<button type="button" class="btn btn-primary btn-sm">
													Uložiť a Pokračovať</button>
												<button type="button" class="btn btn-default btn-sm">
													Zrušiť</button>
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