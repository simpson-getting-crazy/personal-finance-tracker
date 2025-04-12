@props(['value', 'required'])

<label {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $value ?? $slot }}

    @if (! empty($required)) <span class="text-danger">*</span> @endif
</label>
