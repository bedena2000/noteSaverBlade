<div class="noteItem">
    <p class="noteItem__title">{{ $title }}</p>

    <div class="noteItem-information">
        <p class="noteItem-information__createdAt">{{ $createdAt }}</p>
        <p class="noteItem-information__content">{{ Str::limit($content, 100) }}</p>
    </div>
</div>
