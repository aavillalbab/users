
<div class="form-group">
    <label for="name">Nombres:</label>
    <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}"
           name="name" value="{{ old('name') }}"/>
    {!! $errors->first('name', '* <span class="help-block text-danger">:message</span>') !!}
</div>


<div class="form-group">
    <label for="last_name">Apellidos:</label>
    <input id="last_name" type="text" class="form-control {{ $errors->has('last_name') ? 'border border-danger' : '' }}"
           name="last_name" value="{{ old('last_name') }}"/>
    {!! $errors->first('last_name', '* <span class="help-block text-danger">:message</span>') !!}
</div>

<div class="form-group">
    <label for="document">Cédula:</label>
    <input id="document" type="text" class="form-control {{ $errors->has('document') ? 'border border-danger' : '' }}"
           name="document" value="{{ old('document') }}"/>
    {!! $errors->first('document', '* <span class="help-block text-danger">:message</span>') !!}
</div>

<div class="form-group">
    <label for="email">Correo:</label>
    <input id="email" type="text" class="form-control {{ $errors->has('email') ? 'border border-danger' : '' }}"
           name="email" value="{{ old('email') }}"/>
    {!! $errors->first('email', '* <span class="help-block text-danger">:message</span>') !!}
</div>

<div class="form-group">
    <label for="phone">Télefono:</label>
    <input id="phone" type="text" class="form-control {{ $errors->has('phone') ? 'border border-danger' : '' }}"
           name="phone" value="{{ old('phone') }}"/>
    {!! $errors->first('phone', '* <span class="help-block text-danger">:message</span>') !!}
</div>
