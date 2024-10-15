<!-- <div class="noteItem">
    <p class="noteItem__title">My Goals for the Next Year</p>

    <div class="noteItem-information">
        <p class="noteItem-information__createdAt">21/06/2022</p>
        <p class="noteItem-information__content">it's hard to believe that June is already over! Looking back on the month, there were a few highlights that stand out to me</p>
    </div>
</div> -->

<div class="noteItem">
    <p class="noteItem__title">{{ $title }}</p>

    <div class="noteItem-information">
        <p class="noteItem-information__createdAt">{{ $createdAt }}</p>
        <p class="noteItem-information__content">{{ Str::limit($content, 100) }}</p>
    </div>
</div>
