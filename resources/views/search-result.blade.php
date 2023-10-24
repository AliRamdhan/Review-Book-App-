<x-client-layout>
    <div class="w-full flex flex-col items-center min-h-screen">
        @if ($books)
            <div class="w-full px-8 text-xl font-bold py-4 border-b-2">
                <div class="text-3xl font-semibold">
                    Hasil Pencarian untuk "{{ request('search') }}"</div>
                <div class="text-lg font-medium">Berikut adalah buku-buku yang kami
                    tampilkan berdasarkan kata kunci
                    pencarianmu:</div>
            </div>
            <div class="w-full min-h-screen flex flex-col items-center mt-8">
                <div class="w-full px-8">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($books as $book)
                            <div class="h-[220px] flex justify-center items-center border-2 rounded-r-xl rounded-black">
                                <img src={{ asset('storage/books_image/' . $book->bookImage) }} alt=""
                                    class="w-1/2 h-full">
                                <div class="w-full flex flex-col justify-center gap-1 px-2">
                                    <div class="font-semibold text-xl">{{ $book->bookTitle }}</div>
                                    <div class="font-medium"
                                        style=" display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;overflow: hidden;">
                                        {{ $book->bookSynopsis }} Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Iste velit accusantium nihil minus aut iure quaerat eius distinctio praesentium
                                        alias natus exercitationem cupiditate quo laborum, odio adipisci fugit, ducimus
                                        ipsam.</div>
                                    <div>
                                        <div class="flex items-center">
                                            @if ($book->averageRating)
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $book->averageRating)
                                                        <svg class="w-4 h-3 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    @else
                                                        <svg class="w-4 h-3 text-gray-600" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    @endif
                                                @endfor

                                                <p class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-500">
                                                    {{ number_format($book->averageRating, 2) }} out of
                                                    {{ number_format(5, 2) }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <a href="{{ route('book.details', ['bookId' => $book->bookTitle]) }}">
                                            <div
                                                class=" text-center p-1 w-full text-sm font-medium text-black rounded-lg border">
                                                See
                                                More
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="w-full px-8 text-xl font-bold py-4 border-b-2">
                <div class="text-3xl font-semibold">Hasil Pencarian untuk "{{ request('search') }}"</div>
                <div class="text-lg font-medium">Maaf tidak ada buku-buku yang kami tampilkan berdasarkan kata kunci pencarianmu</div>
            </div>
        @endif
    </div>
</x-client-layout>
