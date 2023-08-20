<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating A Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{route('task.update', $task->id)}}">
                @method('PUT')
                @csrf
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Task Information</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">write tassk details
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Task
                                name</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" value="{{$task->name}}" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="deadline" class="block text-sm font-medium leading-6 text-gray-900">Task
                                deadline</label>
                            <div class="mt-2">
                                <input type="date" name="deadline" id="deadline" value="{{$task->deadline}}" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="discription" class="block text-sm font-medium leading-6 text-gray-900">Task discription</label>
                            <div class="mt-2">
                              <textarea id="discription" name="discription" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$task->discription}}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Explain the task in details</p>
                          </div>

                        <div class="sm:col-span-3">
                            <label for="type"
                                class="block text-sm font-medium leading-6 text-gray-900">Task Type</label>
                            <div class="mt-2">
                                <select id="type" name="type" autocomplete="type" value="{{$task->type}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="urgent">Urgent</option>
                                    <option value="medium">Medium</option>
                                    <option value="regular">Regular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button  onclick="history.back()" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
