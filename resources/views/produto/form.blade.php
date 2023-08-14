<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('nome', $produto->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id', 'Categoria') }}
            {{ Form::select('categoria_id', $categorias->pluck('nome', 'id'), $produto->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecione uma categoria']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('cor_id', 'Cor') }}
            {{ Form::select('cor_id', $cores->pluck('nome', 'id'), $produto->cor_id, ['class' => 'form-control' . ($errors->has('cor_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecione uma cor']) }}
            {!! $errors->first('cor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $produto->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 py-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
