<div aria-hidden="true" class="hidden">
    <input type="text" name="{{ $name }}[{{ $potFieldName }}]" value="" autocomplete="off" tabindex="-1" maxlength="100">
    <input type="text" name="{{ $name }}[{{ $timeFieldName }}]" value="{{ $encryptedTime }}" autocomplete="off" tabindex="-1">
</div>
@error($name)
    <div class="alert alert-error">{{ $message }}</div>
@enderror