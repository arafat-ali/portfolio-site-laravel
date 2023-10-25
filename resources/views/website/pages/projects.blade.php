@extends('website.layouts.default')
@section('content')

<div class="w-full flex justify-center mt-8 py-8">
    <h3 class="text-lg logo">{{$title}}</h3>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($data as $project)
    <div class="bg-[#001c29] border border-gray-200 rounded-lg shadow">
        <a class="">
            <img class="rounded-t-lg h-48 w-full" src="{{asset('/assets/images/'.$project->image)}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{$project->title}}
                </h5>
            </a>
            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 h-32">
                {{$project->description}}
            </p>
            <a class="inline-flex w-full items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-900">
            {{$project->tech}}
            </a>
        </div>
    </div>
    @endforeach
</div>

@stop