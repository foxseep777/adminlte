<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User Name:') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Id Company:') !!}
    {!! Form::select('id_company', $companies, null,['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
