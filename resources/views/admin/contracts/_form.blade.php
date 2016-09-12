<div class="form-group {{ $errors->has('vendor_id') ? 'has-error': '' }}">
    {!! Form::label("vendor_id", "Vendedor:") !!}
    {!! Form::select('vendor_id',$vendors,null,['class'=>'form-control vendors']) !!}
    @if($errors->has('vendor_id'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('vendor_id') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('client_id') ? 'has-error': '' }}">
    {!! Form::label("client_id", "Cliente:") !!}
    {!! Form::select('client_id',$clients,null,['class'=>'form-control clients']) !!}
    @if($errors->has('client_id'))
        <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('client_id') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('data_contrato') ? 'has-error': '' }}">
    {!! Form::label('data_contrato','Data do Contrato:') !!}
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('data_contrato',null,['class'=>'form-control pull-right date', 'placeholder' => 'Inserir a Data de Contratação']) !!}
        @if($errors->has('data_contrato'))
            <span class='help-block'><i class="fa fa-times"></i> {{ $errors->first('data_contrato') }}</span>
        @endif
    </div>
</div>

@section('js')
    @parent
    <script>
        $(document).ready(function () {
            $('.vendors').select2();
            $('.clients').select2();
        });
    </script>
@endsection