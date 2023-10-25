@extends('website.layouts.default')
@section('content')

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($data as $exp)
    <div class="bg-gray-100 border-2 border-gray-100 rounded-lg m-1">
        <div class="p-5">
            <a href="#">
                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$exp->name}}
                </h5>
            </a>
            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 h-16">
                {{'Environment : Good'}}
            </p>
            <a class="inline-flex w-full items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg">
            {{"Experience: " .$exp->years . ' Years'}}
            </a>
        </div>
        <div class="-mt-px flex">
            <div class="flex-1 flex bg-gray-700">
                <a href="{{'/projects/' . $exp->id }}" 
                class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-100 border-t  font-medium hover:text-indigo-500">
                    <svg
                        class="w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                        />
                    </svg>
                    <span class="ml-3 text-gray-100 hover:text-indigo-500">View Projects</span>
                </a>
            </div>
        </div>
    </div>
    
    @endforeach
</div>

@stop