<x-app-layout>
    <div class="w-full h-screen pt-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
            </p>
        </div>
        @if ($genre)
            <form action="{{ route('update.genre', ['genre' => $genre->genre_id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <section class="w-full flex justify-center">
                    <div class="w-full mb-0 mt-4 mx-8 flex flex-col items-center gap-4">
                        <div class="w-full ">
                            <div>Genre Name</div>
                            <input type="text" name="genreName"
                                class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                                value="{{ $genre->genreName }}" />
                        </div>
                        <div class="w-full ">
                            <div>Genre Description</div>
                            <input type="text" name="genreDescription"
                                class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                                value="{{ $genre->genreDescription }}" />
                        </div>
                        <div class="w-full flex justify-end items-end gap-4">
                            <a href="{{ route('admin.others') }}">
                                <button type="button"
                                    class="inline-block rounded-lg bg-red-500 w-52 py-1 text-lg font-medium text-white">
                                    Cancel
                                </button>
                            </a>
                            <button type="submit"
                                class="inline-block rounded-lg bg-blue-500 w-52 py-1 text-lg font-medium text-white">
                                Update
                            </button>
                        </div>
                    </div>
                </section>
            </form>
        @else
            <div>Genre not found</div>
        @endif
    </div>
</x-app-layout>
