@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- resources/views/books.blade.php -->
<x-app-layout>
    <!--全エリア[START]-->
    <div class="bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 px-4 py-4 m-2">
            
        <form action="{{ route('answer_to_que.store') }}" method="POST" class="w-full max-w-lg" enctype="multipart/form-data">
             
             @csrf
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($questions as $question)
                <div class="p-6 bg-white border-b border-gray-500 font-bold">
                    質問者の{{$question ->questioner_id}}さんに回答する
                    {{$question ->que_title}}さんに回答する
                <!--回答者のユーザーID-->
                </div>
                 <input type="hidden" name="que_title" value="{{$question->que_title}}">
                <input type="hidden" name="que_comment" value="{{$question->que_comment}}">
                <input type="hidden" name="answer_num" value="{{$question->answer_id}}">
                <input type="hidden" name="answer_id" value="{{$question->answer_id}}">
                <input type="hidden" name="questioner_id" value="{{$question->questioner_id}}">
                @endforeach
                

                <!--質問者のユーザーID-->
                <!--<input type="hidden" name="questioner_id" value="$questioner_id" />-->
                
            </div>
            
                <div class="container mx-auto shadow-lg rounded-lg">
            <div class="flex-col px-2 py-2">
                   <!-- 質問のタイトル -->
                   <!--<div class="w-full md:w-1/1 px-3 ">-->
                   <!--   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                   <!--    質問のタイトル-->
                   <!--   </label>-->
                   <!--   <input name="answer_id" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">-->
                   <!-- </div>-->
                    
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        回答
                      </label>
                      <input name="answer_comment" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!--カラム4-->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        提案する商品のURL
                      </label>
                      <input name="answer_item_URL" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                  
 
                  <!-- カラム５ -->
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">送信</x-button>
                      </div>
                  </div>
            </form>
            </div>
        </div>
    </div>
    </x-app-layout>