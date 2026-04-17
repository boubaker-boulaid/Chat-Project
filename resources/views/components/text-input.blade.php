@props(['disabled' => false])

<input placeholder="" @disabled($disabled) {{ $attributes->merge(['class' => 'input input-primary shadow-md']) }}>
