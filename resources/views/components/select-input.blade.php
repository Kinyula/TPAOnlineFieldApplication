<div>
    @props(['disabled' => false])

    <select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-select rounded-md shadow-sm']) !!}>
        {{ $slot }}
    </select>

</div>
