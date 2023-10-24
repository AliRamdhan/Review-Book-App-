<x-app-layout>
    <div class="w-full h-screen pt-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla
                eaque error neque ipsa culpa autem, at itaque nostrum!
            </p>
        </div>
        <form action="{{route('create.publisher')}}" method="POST">
            @csrf
            <section class="w-full flex justify-center">
                <div class="w-full mb-0 mt-4 mx-8 flex flex-col items-center gap-4">
                    <div class="w-full ">
                        <div>Publisher Name</div>
                        <input type="text" name="publisherName" class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Title" />
                    </div>
                    <div class="w-full ">
                        <div>Publisher Description</div>
                        <input type="text" name="publisherDescription" class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Title" />
                    </div>
                    <div class="w-full ">
                        <div>Publisher Address</div>
                        <input type="text" name="publisherAddress" class="w-full rounded-lg border-gray-200 p-2 text-sm shadow-sm border-2"
                            placeholder="Title" />
                    </div>
                    <div class="w-full flex justify-end items-end gap-4">
                        <a href="{{ route('admin.others') }}">
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
