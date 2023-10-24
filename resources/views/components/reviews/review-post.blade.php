<form class="w-full rounded-lg pt-4" action="{{ route('post.book.review', $book->book_id) }}" method="POST">
    @csrf
    <div class="flex flex-col">
        <div class="w-full flex justify-center px-2">
            <div class="w-14 h-14">
                <img src="{{ asset('image/buku2.jpg') }}" alt="image"
                    class="w-full h-full rounded-full border border-black">
            </div>
            <div class="w-full px-4 mb-2">
                <textarea
                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                    name="reviewText" placeholder='Type Your Comment' rows="4" required></textarea>
            </div>
        </div>
        <div class="w-full px-12 rating-stars flex">
            <input type="radio" name="reviewRates" id="rating-5" value="5" class="text-2xl hidden" />
            <label for="rating-5" class="star text-2xl text-yellow-400">&#9733;</label>
            <input type="radio" name="reviewRates" id="rating-4" value="4" class="text-2xl hidden" />
            <label for="rating-4" class="star text-2xl text-yellow-400">&#9733;</label>
            <input type="radio" name="reviewRates" id="rating-3" value="3" class="text-2xl hidden" />
            <label for="rating-3" class="star text-2xl text-yellow-400">&#9733;</label>
            <input type="radio" name="reviewRates" id="rating-2" value="2" class="text-2xl hidden" />
            <label for="rating-2" class="star text-2xl text-yellow-400">&#9733;</label>
            <input type="radio" name="reviewRates" id="rating-1" value="1" class="text-2xl hidden" />
            <label for="rating-1" class="star text-2xl text-yellow-400">&#9733;</label>
        </div>
        <div class="w-full flex justify-between px-5">
            <div></div>
            <button type="submit"
                class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Post
                Comment</button>
        </div>
    </div>
</form>
