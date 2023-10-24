<form class="w-full rounded-lg" action="{{route('post.discuss')}}" method="POST">
    @csrf
    <div class="flex flex-col pb-4">
        <div class="w-full flex justify-center px-2">
            <div class="w-14 h-14">
                <img src="{{asset("image/buku2.jpg")}}" alt="image" class="w-full h-full rounded-full border border-black">
            </div>
            <div class="w-full px-4 mb-2">
                <textarea
                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full font-medium placeholder-gray-700 focus:outline-none focus:bg-white p-2"
                    name="discussMessage" placeholder='Type Your Comment' rows="4" required></textarea>
            </div>
        </div>
        <div class="w-full flex justify-between px-5">
            <div></div>
            <button type="submit"
                class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Post
                Comment</button>
        </div>
    </div>
</form>


