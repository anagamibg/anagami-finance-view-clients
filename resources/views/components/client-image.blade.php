<div class="taskEmployeeImg rounded-circle mr-1">
    <a href="{{ databackd_client_url($user->id) ?? 'javascript:;' }}">
        <img data-toggle="tooltip" data-original-title="{{ $user->name }}"
            src="{{ $user->image_url }}">
    </a>
</div>
