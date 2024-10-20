@props([
    'label' => '',
    'id' => '',
    'placeholder' => '',
    'type' => 'text',
    'name' => '',
])

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="{{$id}}" class="form-label">{{ $label }}</label>
                    <textarea name="{{$name}}" class="form-control" id="{{$id}}" placeholder="{{ $placeholder }}" rows="4"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
