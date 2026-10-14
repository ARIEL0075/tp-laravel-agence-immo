@php
    $selected = collect(old($name, $value ?? []))->map(fn($v) => (string) $v)->all();
@endphp
<select name="{{ $name }}[]" id="{{ $name }}" multiple class="@error($name) is-invalid @enderror">
    @foreach($options as $k => $v)
        <option value="{{ $k }}" @selected(in_array((string) $k, $selected))>{{ $v }}</option>
       
    @endforeach
    
</select>