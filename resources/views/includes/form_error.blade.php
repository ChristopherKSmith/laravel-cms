<div class = "form-group">
	{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}


@if(count($errors) > 0)

	<div class="alert alert-danger">
		<ul>
		    @foreach($errors->all() as $error)

		    <li>{{$error}}</li>

		    @endforeach
		</ul>
	</div>

@endif