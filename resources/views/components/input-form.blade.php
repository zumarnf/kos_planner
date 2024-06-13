@props(['type', 'name', 'label', 'value' => null])

<div class="mb-4 w-full">
    <label for="{{ $name }}" class="mb-2 block font-medium text-grey-gh">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $name }}"
        value="{{ old($name) ? old($name) : $value }}"
        class="@error($name) ring-red-500 @enderror w-full rounded-md py-2 pl-4 pr-12 outline-none ring-1 ring-grey-gh">
    @error($name)
        <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
    @enderror
</div>
