
<div class="mb-6">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 col-end-5">Titulo</label>
    <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="title" value="{{old('title',$post->title??'')}}" placeholder="titulo del post">
    @error('title')
        <small style="color:darkred">{{$message}}</small>
    @enderror
</div>

<div class="mg-6">

    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Contenido</label>
    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." name="body" value="">{{old('body',$post->body??'')}}</textarea>
    @error('body')
        <small style="color:darkred">{{$message}}</small>
    @enderror

    <input type="submit" value="{{$textButton}}" class="block focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-8">

</div>
