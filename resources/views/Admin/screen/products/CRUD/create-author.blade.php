<x-app-layout>
    <div class="w-full h-screen pt-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
            </p>
        </div>
        <form action="{{ route('create.author') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="w-full flex justify-center">
                <div class="w-full mb-0 mt-4 mx-8 flex flex-col items-center gap-4">
                    <div class="w-full flex justify-around">
                        <div class="w-full flex flex-col gap-4">
                            <div class="w-full">
                                <div>Name</div>
                                <input type="text" name="authorName"
                                    class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                                    placeholder="Title" />
                            </div>
                            <div class="w-full">
                                <div>Description</div>
                                <input type="text" name="authorDescription"
                                    class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                                    placeholder="Synopsis" />
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full flex flex-col justify-center items-center">
                                <label class="w-4/5 text-sm font-bold text-gray-500 tracking-wide">Attach
                                    Document</label>
                                <div class="flex items-center justify-center w-4/5 ">
                                    <label
                                        class="flex flex-col rounded-lg border-4 border-dashed w-full h-32 py-16 group text-center">
                                        <div
                                            class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                            <div class="flex flex-auto">
                                                <img class="has-mask h-16 object-center"
                                                    src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                                    alt="freepik image">
                                            </div>
                                            <div class="pointer-none text-gray-500">
                                                <span class="text-sm">Drag and drop</span>
                                                files here or
                                                <div class="w-full flex justify-center items-center">
                                                    <div href="" id="fileUploadLabel"
                                                        class="text-blue-600 hover:underline">
                                                        <input type="file" name="authorImage" id=""
                                                            class="w-56">
                                                    </div>
                                                    from your computer
                                                </div>

                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <p class="pl-16 text-sm text-gray-300">
                                <span>File type: doc,pdf,types of images</span>
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex justify-end items-end gap-4 px-16">
                        <a href="{{ route('admin.author') }}">
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
