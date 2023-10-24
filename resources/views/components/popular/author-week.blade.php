<ul class="flex flex-col divide-y w-64">
    @foreach ($authorsOfWeek->sortByDesc(function ($author) {
        return $author->totalReviews + $author->totalReplies;
    })->take(5) as $author)
        <li class="flex flex-row">
            <a href="#">
                <div
                    class="flex-1 select-none cursor-pointer hover:bg-gray-50 flex items-center gap-4 p-2">
                    <img class="w-12 h-12 rounded-full"
                        src="{{ asset('storage/authors_image/' . $author->authorImage) }}" alt="Image">
                    <div class="font-semibold text-lg">{{ $author->authorName }}</div>
                </div>
            </a>
        </li>
    @endforeach
</ul>
