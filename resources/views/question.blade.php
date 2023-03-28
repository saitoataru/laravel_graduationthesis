@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- resources/views/books.blade.php -->
<x-app-layout>
    <!--全エリア[START]-->
    <div class="bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 px-4 py-4 m-2">
            
        <form action="{{ route('que.store') }}" method="POST" class="w-full max-w-lg" enctype="multipart/form-data">
             
             @csrf
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($users as $user)
                <div class="p-6 bg-white border-b border-gray-500 font-bold">
                    {{$user->name}}さんに質問する
                <!--回答者のユーザーID-->
                </div>
                <!--<div class="p-6 bg-white border-b border-gray-500 font-bold" name=answer_id>-->
                <!--    expartの{{$user->id}}さんに質問する-->
                <!--回答者のユーザーID-->
                <!--</div>-->
                <input type="hidden" name="answer_id" value="{{$user->id}}">
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
                    
                    <div class="w-full md:w-1/1 px-3 ">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       質問のタイトル
                      </label>
                      <input name="que_title" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        質問の内容
                      </label>
                      <input name="que_comment" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!--カラム4-->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        購入しようと思っている商品のURL
                      </label>
                      <input name="item_URL" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                  
                  <!-- 画像の保存 -->
                 <!-- <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">-->
                 <!--       <label class="block text-sm font-medium mb-2">参考の画像</label>-->
                 <!--       <div class="flex items-end">-->
                 <!--           <input id="image" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*' name="image">-->
                 <!--       </div>-->
                　<!--</div>-->
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