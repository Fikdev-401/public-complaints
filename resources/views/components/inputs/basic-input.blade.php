@props([
    'label' => '',
    'id' =>'',
    'placeholder' =>'',
    'type' =>'text',
    'name' =>'',
])

<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}"
        placeholder="{{ $placeholder }}" name="{{ $name }}">
</div>
