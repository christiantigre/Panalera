<div class="col-md-6">
<div class="form-group {{ $errors->has('nom_cli') ? 'has-error' : ''}}">
    <label for="nom_cli" class="col-md-4 control-label">{{ 'Nombre (*)' }}</label>
    <div class="col-md-6">

      {!! Form::text('nom_cli', null, ['class' => 'form-control', 'id'=>'nom_cli']), old('nom_cli') !!}
      <!--
        <input class="form-control" name="nom_cli" type="text" id="nom_cli" value="{{ $cliente->nom_cli or ''}}" autofocus="">
      -->
        {!! $errors->first('nom_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('app_cli') ? 'has-error' : ''}}">
    <label for="app_cli" class="col-md-4 control-label">{{ 'Apellido (*)' }}</label>
    <div class="col-md-6">
        {!! Form::text('app_cli', null, ['class' => 'form-control', 'id'=>'app_cli']), old('app_cli') !!}
        <!--
        <input class="form-control" name="app_cli" type="text" id="app_cli" value="{{ $cliente->app_cli or ''}}" >
        -->
        {!! $errors->first('app_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ced_cli') ? 'has-error' : ''}}">
    <label for="ced_cli" class="col-md-4 control-label">{{ 'Cedula (*)' }}</label>
    <div class="col-md-6">        
        {!! Form::text('ced_cli', null, ['class' => 'form-control', 'id'=>'ced_cli']), old('ced_cli') !!}
        <!--
        <input class="form-control" name="ced_cli" type="number" id="ced_cli" value="{{ $cliente->ced_cli or ''}}" >
        -->
        {!! $errors->first('ced_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ruc_cli') ? 'has-error' : ''}}">
    <label for="ruc_cli" class="col-md-4 control-label">{{ 'Ruc' }}</label>
    <div class="col-md-6">
        {!! Form::text('ruc_cli', null, ['class' => 'form-control', 'id'=>'ruc_cli']), old('ruc_cli') !!}
        <!--
        <input class="form-control" name="ruc_cli" type="number" id="ruc_cli" value="{{ $cliente->ruc_cli or ''}}" >
        -->
        {!! $errors->first('ruc_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dir_cli') ? 'has-error' : ''}}">
    <label for="dir_cli" class="col-md-4 control-label">{{ 'Dirección' }}</label>
    <div class="col-md-6">
        {!! Form::text('dir_cli', null, ['class' => 'form-control', 'id'=>'dir_cli']), old('dir_cli') !!}
        <!--
        <input class="form-control" name="dir_cli" type="text" id="dir_cli" value="{{ $cliente->dir_cli or ''}}" >
        -->
        {!! $errors->first('dir_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mail_cli') ? 'has-error' : ''}}">
    <label for="mail_cli" class="col-md-4 control-label">{{ 'Correo' }}</label>
    <div class="col-md-6">

        {!! Form::text('mail_cli', null, ['class' => 'form-control', 'id'=>'mail_cli']), old('mail_cli') !!}
        <!--
        <input class="form-control" name="mail_cli" type="text" id="mail_cli" value="{{ $cliente->mail_cli or ''}}" >
        -->
        {!! $errors->first('mail_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tlf_cli') ? 'has-error' : ''}}">
    <label for="tlf_cli" class="col-md-4 control-label">{{ 'Teléfono' }}</label>
    <div class="col-md-6">
         {!! Form::text('tlf_cli', null, ['class' => 'form-control', 'id'=>'tlf_cli']), old('tlf_cli') !!}
         <!--
        <input class="form-control" name="tlf_cli" type="text" id="tlf_cli" value="{{ $cliente->tlf_cli or ''}}" >
         -->
        {!! $errors->first('tlf_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="col-md-6">
<div class="form-group {{ $errors->has('wts_cli') ? 'has-error' : ''}}">
    <label for="wts_cli" class="col-md-4 control-label">{{ 'WhatsApp' }}</label>
    <div class="col-md-6">

         {!! Form::text('wts_cli', null, ['class' => 'form-control', 'id'=>'wts_cli']), old('wts_cli') !!}
         <!--
        <input class="form-control" name="wts_cli" type="text" id="wts_cli" value="{{ $cliente->wts_cli or ''}}" >
         -->
        {!! $errors->first('wts_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('clmovi_cli') ? 'has-error' : ''}}">
    <label for="clmovi_cli" class="col-md-4 control-label">{{ 'Tlf. Movistar' }}</label>
    <div class="col-md-6">
        {!! Form::text('clmovi_cli', null, ['class' => 'form-control', 'id'=>'clmovi_cli']), old('clmovi_cli') !!}
        <!--
        <input class="form-control" name="clmovi_cli" type="text" id="clmovi_cli" value="{{ $cliente->clmovi_cli or ''}}" >
        -->
        {!! $errors->first('clmovi_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('clclr_cli') ? 'has-error' : ''}}">
    <label for="clclr_cli" class="col-md-4 control-label">{{ 'Tlf. Claro' }}</label>
    <div class="col-md-6">        
        {!! Form::text('clclr_cli', null, ['class' => 'form-control', 'id'=>'clclr_cli']), old('clclr_cli') !!}
        <!--
        <input class="form-control" name="clclr_cli" type="text" id="clclr_cli" value="{{ $cliente->clclr_cli or ''}}" >
        -->
        {!! $errors->first('clclr_cli', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <select name="activo" class="form-control" id="activo" >
    @foreach (json_decode('{"1":"Activo","0":"Inactivo"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($almacen->activo) && $almacen->activo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('id_pais') ? 'has-error' : ''}}">
    <label for="id_pais" class="col-md-4 col-lg-2 control-label">{{ 'Pais' }}</label>
    <div class="col-md-6 col-lg-8">
        {!! Form::select('id_pais', $paises, null, ['class' => 'form-control','id'=>'id_pais']) !!}
        {!! $errors->first('id_pais', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('id_provincia') ? 'has-error' : ''}}">
    <label for="id_provincia" class="col-md-4 col-lg-2 control-label">{{ 'Provincia' }}</label>
    <div class="col-md-6 col-lg-8">
        {!! Form::select('id_provincia', $provincias, null, ['class' => 'form-control','id'=>'id_provincia']) !!}
        {!! $errors->first('id_provincia', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('id_canton') ? 'has-error' : ''}}">
    <label for="id_canton" class="col-md-4 col-lg-2 control-label">{{ 'Cantón' }}</label>
    <div class="col-md-6 col-lg-8">
        {!! Form::select('id_canton', $cantones, null, ['class' => 'form-control','id'=>'id_canton']) !!}
        {!! $errors->first('id_canton', '<p class="help-block">:message</p>') !!}
    </div>
</div>


</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
