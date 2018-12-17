@if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('email'))}}</strong>
    </span>
@elseif ($errors->has('password'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('password'))}}</strong>
    </span>
@elseif ($errors->has('image'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('image'))}}</strong>
    </span>
@elseif ($errors->has('name'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('name'))}}</strong>
    </span>
@elseif ($errors->has('body'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('body'))}}</strong>
    </span>
@elseif ($errors->has('title'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('title'))}}</strong>
    </span>
@elseif ($errors->has('body'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('body'))}}</strong>
    </span>
@elseif ($errors->has('title'))
    <span class="invalid-feedback">
        <strong>{{($errors->first('title'))}}</strong>
    </span>
@elseif ($errors->has('avatar'))
    <span>
        <strong>{{($errors->first('avatar'))}}</strong>
    </span>
@endif
