@extends('layouts.menuTemplate_left_menu_options')

<!--"Programs Management"-->

@section('title')
	<title> {!!Lang::get('labels.add_modelTemplate')!!}</title>
@stop


	
@section('body')

	@include('php.top_user_message', array('keyMessage' => 'topbar_message_create', 'transaction' => 'modelTemplates'))

	<div id="transaction-panel" class="col-sm-10 align="left"">

	    <div class="panel panel-default">

	         <div class="pull-right" style="padding:6px">
        		<button id="button-fullscreen" class="btn btn-xs btn-default" data-fullscreen="false">
        			<i id="icon-fullscreen" class="glyphicon glyphicon-align-justify" ></i>
        		</button>
        	</div>
        	
	        <div id="transaction-panel-header" class="panel-heading">
	     		 <h3 class="panel-title">{!!Lang::get('labels.add_modelTemplate')!!}</h3>
			</div>           

	        <div class="panel-body">

				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">

					 	@include('php.popup_message')
							
					</div>
				</div>

				@include('php.validation_message')

				{!! Form::open(array('route' => 'menuTemplate.modelTemplates.store')) !!}

					<div class="row">
						<div class="col-sm-3 text-left">
							<div class="control-group">
								{!!Form::label(Lang::get('fields.modelTemplate_name'))!!}				
								{!!Form::text('modelTemplate_name','', array('class' => 'form-control','size' => '10px'))!!}
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-sm-12 text-left">
							<div class="control-group">
								{!!Form::label(Lang::get('fields.modelTemplate_description'))!!}
								{!!Form::textarea('modelTemplate_description','',array('class' => 'form-control','size' => '10px'))!!}
							</div>
					</div>

					<hr>

					<div class="control-group">
						{!!Form::submit(Lang::get('buttons.add'),array ('class'=>'btn btn-sm btn-primary'))!!}
						{!!Form::reset(Lang::get('buttons.clear') ,array ('class'=>'btn btn-sm btn-primary'))!!}
					
						{!!link_to(URL::to(Session::get('UrlPrevious')), Lang::get('buttons.back'), array('class' => 'btn btn-sm btn-primary'))!!}
					</div>	
				{!!  Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop

