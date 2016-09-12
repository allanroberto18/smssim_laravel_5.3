<div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
    {!! Form::label('name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'placeholder' => 'Inserir o Nome']) !!}
    @if($errors->has('name'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
    {!! Form::label('email','Email:') !!}
    {!! Form::text('email',null,['class'=>'form-control', 'placeholder' => 'Inserir o E-mail']) !!}
    @if($errors->has('email'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('email') }}</span>
    @endif
</div>