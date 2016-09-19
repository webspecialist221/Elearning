@extends('layout.admin-master')

@section('content')

<div class="page-content">
	<div class="content container" style="min-height:515px;">
        <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="widget">
				<div class="widget-header"> <i class="icon-align-left"></i>
					<h3>Add Playlist </h3>
				</div>
				<div class="widget-content">
					{!! Form::open(['url' => 'playlist_form','files' => true,'method'=>'post']) !!}
						<fieldset>
							<!-- <legend class="section">Horizontal form</legend> -->

							<div class="control-group">
								<div class="col-md-3">
									{!! Form::label('name', "Technology Name: ",['class'=>'control-label']) !!}
								</div>
								<div class="col-md-9">
									<div class="form-group">
					                {!! Form::text('name', null , ['class' => 'form-control','id'=>'name'] ) !!}					
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="col-md-3">
									{!! Form::label('playlist', "Playlist Id: ",['class'=>'control-label']) !!}
								</div>
								<div class="col-md-9">
									<div class="form-group">
										{!! Form::text('playlist_id', null , ['class' => 'form-control','id'=>'playlist'] ) !!}
									</div>
								</div>
							</div>

							<div class="control-group">
								<div class="col-md-3">
									{!! Form::label('file', "Picture: ",['class'=>'control-label']) !!}
								</div>
								<div class="col-md-9">
									<div class="form-group">
										{!! Form::file('file', null , ['class' => 'form-control','id'=>'file'] ) !!}
									</div>
								</div>
							</div>
							
							</fieldset>
								<div class="form-actions">
									<div>
										{!! Form::submit('submit', ['class' => 'btn btn-primary','id'=>'playlist'] ) !!}
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
                </div>
			</div>
		</div>		
		@endsection