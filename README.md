- php artisan key:generate --ansi
- composer require livewire/livewire
- php artisan make:component AppLayout
- npm install -D tailwindcss postcss autoprefixer
- npx tailwindcss init -p



<select name="version">
    @foreach ($product->versions as $version)
        <option value="{{ $version }}" @selected(old('version') == $version)>
            {{ $version }}
        </option>
    @endforeach
</select>