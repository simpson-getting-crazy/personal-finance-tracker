<select {{ $attributes->merge(['class' => 'form-select form-control']) }} aria-invalid="false">
    {{ $slot }}
</select>
