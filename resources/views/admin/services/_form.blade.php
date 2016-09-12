<div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
    {!! Form::label('name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'placeholder' => 'Inserir o Nome']) !!}
    @if($errors->has('name'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error': '' }}">
    {!! Form::label('price','Preço:') !!}
    {!! Form::text('price',null,['class'=>'form-control', 'placeholder' => 'Inserir o Preço']) !!}
    @if($errors->has('price'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('price') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error': '' }}">
    {!! Form::label('description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control', 'placeholder' => 'Inserir a Descrição', 'rows' => 5]) !!}
    @if($errors->has('description'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('description') }}</span>
    @endif
</div>

@section('js')
    @parent
    <script src="{{ asset('src/node_modules/jquery-mask-plugin/src/jquery.mask.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.price').mask('000.000.000.000.000,00', {reverse: true});
        });
    </script>
@endsection