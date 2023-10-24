<ul class="flex w-full h-20 flex-col gap-5">
    @foreach ($books->sortByDesc(function ($book) {
        return $book->reviews->count();
    }) as $book)
        <li class="flex justify-center items-center">
            <div class="select-none cursor-pointer hover:bg-gray-50 flex items-center p-2 w-full gap-4">
                <img src="image/buku1.jpg" alt="Image" class="w-18 h-20">
                <div>
                    <div class="font-semibold text-lg">{{ $book->bookTitle }}</div>
                    <div class="font-medium text-sm"><span class="text-gray-500">by</span> {{ $book->author->authorName }}
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
