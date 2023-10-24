<x-app-layout>
    <div class="w-full h-screen pt-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
            </p>
        </div>
        <form action="{{ route('create.books') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="w-full flex justify-center">
                <div class="w-full mb-0 mt-4 mx-8 flex flex-col items-center gap-4">
                    <div class="w-full ">
                        <div>Title</div>
                        <input type="text" name="bookTitle"
                            class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Title" />
                    </div>
                    <div class="w-full">
                        <div>Synopsis</div>
                        <input type="text" name="bookSynopsis"
                            class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Synopsis" />
                    </div>
                    <div class="w-full">
                        <div>Pages</div>
                        <input type="text" name="bookPages"
                            class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Pages" />
                    </div>
                    <div class="w-full">
                        <div>Authors</div>
                        <select name="bookAuthor" id="bookAuthor" class="w-full border-2 p-2 rounded-lg">
                            @foreach ($author as $item)
                                <option value="{{ $item->author_id }}">{{ $item->authorName }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="w-full">
                        <div>Genre</div>
                        @foreach ($genres as $genre)
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" name="bookGenre[]"
                                    value="{{ $genre->genre_id }}">
                                <span class="ml-2">{{ $genre->genreName }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="w-full flex flex-col gap-4 mt-4 mx-8">
                    <div class="w-full">
                        <div>Language</div>
                        {{-- <select name="bookLanguage" id="bookLanguage" class="w-full border-2 p-2 rounded-lg ">
                            @foreach ($language as $item)
                                <option value="{{ $item->language_id }}">{{ $item->languageName }}</option>
                            @endforeach
                        </select> --}}
                        @foreach ($language as $item)
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" name="bookLanguage[]"
                                value="{{ $item->language_id }}">
                            <span class="ml-2">{{ $item->languageName }}</span>
                        </label>
                    @endforeach
                    </div>
                    <div class="w-full">
                        <div>Publisher</div>
                        <select name="bookPublisher" id="bookPublisher" class="w-full border-2 p-2 rounded-lg">
                            @foreach ($publisher as $item)
                                <option value="{{ $item->publisher_id }}">{{ $item->publisherName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col rounded-lg border-4 border-dashed w-full h-40 group text-center">
                                <div
                                    class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <div class="flex justify-center w-2/5">
                                        <img class="has-mask h-24 object-center"
                                            src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                            alt="freepik image">
                                    </div>
                                    <div class="pointer-none text-sm text-gray-500">
                                        <span class="text-sm">Drag and drop</span>
                                        files here or
                                        <div class="w-full flex justify-center items-center">
                                            <div href="" id="fileUploadLabel"
                                                class="text-blue-600 hover:underline">
                                                <input type="file" name="bookImage" id="bookImage" class="w-56">
                                            </div>
                                            from your computer
                                        </div>

                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p class="text-sm text-gray-300">
                        <span>File type: doc,pdf,types of images</span>
                    </p>

                    <div class="flex justify-end items-end gap-4">
                        <a href="{{ route('admin.books') }}">
                            <button type="button"
                                class="inline-block rounded-lg bg-red-500 px-12 py-1 text-lg font-medium text-white">
                                Cancel
                            </button>
                        </a>
                        <button type="submit"
                            class="inline-block rounded-lg bg-blue-500 px-12 py-1 text-lg font-medium text-white">
                            Upload
                        </button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</x-app-layout>
