@if (flash()->message)
    <div class="alert alert-dismissible fade show alert-{{ flash()->class ?? 'success' }}" role="alert">
        {{ flash()->message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
