<div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
        value="{{ old('titulo', $publicacion->titulo ?? '') }}" required>
    @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Resumen</label>
    <textarea name="resumen" class="form-control" rows="2">{{ old('resumen', $publicacion->resumen ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Contenido</label>
    <textarea name="contenido" class="form-control @error('contenido') is-invalid @enderror"
        rows="6" required>{{ old('contenido', $publicacion->contenido ?? '') }}</textarea>
    @error('contenido') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="row g-3">
    <div class="col-md-4">
        <label class="form-label">Categoría</label>
        <select name="categoria_id" class="form-select @error('categoria_id') is-invalid @enderror" required>
            <option value="">Seleccioná una categoría</option>
            @foreach($categorias as $cat)
                <option value="{{ $cat->id }}"
                    {{ old('categoria_id', $publicacion->categoria_id ?? '') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->nombre_categoria }}
                </option>
            @endforeach
        </select>
        @error('categoria_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Tipo</label>
        <select name="tipo_publicacion" class="form-select @error('tipo_publicacion') is-invalid @enderror" required>
            <option value="">Seleccioná un tipo</option>
            @foreach(['resena', 'noticia', 'estreno', 'evento', 'recomendacion'] as $tipo)
                <option value="{{ $tipo }}"
                    {{ old('tipo_publicacion', $publicacion->tipo_publicacion ?? '') == $tipo ? 'selected' : '' }}>
                    {{ ucfirst($tipo) }}
                </option>
            @endforeach
        </select>
        @error('tipo_publicacion') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Película relacionada</label>
        <select name="pelicula_id" class="form-select">
            <option value="">Ninguna</option>
            @foreach($peliculas as $pel)
                <option value="{{ $pel->id }}"
                    {{ old('pelicula_id', $publicacion->pelicula_id ?? '') == $pel->id ? 'selected' : '' }}>
                    {{ $pel->titulo }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<div class="mb-3 mt-3">
    <label class="form-label">Etiquetas</label>
    <div class="d-flex flex-wrap gap-2">
        @foreach($etiquetas as $etiqueta)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="etiquetas[]"
                    value="{{ $etiqueta->id }}" id="etiqueta_{{ $etiqueta->id }}"
                    {{ in_array($etiqueta->id, old('etiquetas', $publicacion->etiquetas->pluck('id')->toArray() ?? [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="etiqueta_{{ $etiqueta->id }}">
                    {{ $etiqueta->nombre_etiqueta }}
                </label>
            </div>
        @endforeach
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Imagen portada</label>
    <input type="text" name="imagen_portada" class="form-control"
        value="{{ old('imagen_portada', $publicacion->imagen_portada ?? '') }}"
        placeholder="nombre-archivo.jpg">
</div>

<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" name="estado_publicacion" id="estado_publicacion"
        {{ old('estado_publicacion', $publicacion->estado_publicacion ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="estado_publicacion">Publicar</label>
</div>