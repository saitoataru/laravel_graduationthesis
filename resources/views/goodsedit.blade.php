



@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- resources/views/books.blade.php -->
<x-app-layout>
<div class="container mx-auto shadow-lg rounded-lg m-12">
    <!--ヘッダー[START]-->
 
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
    <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100 ">

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-500 font-bold">
                    アイテムを登録する
                </div>
            </div>
    
    <div class="text-gray-700 text-left px-4 py-4 m-2">
            <!-- 本のタイトル -->
            <form action="{{ route('book_update') }}" method="POST" class="w-full max-w-lg" enctype="multipart/form-data">
    
                @csrf
                  <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       アイテム名
                      </label>
                      <input name="item_name" value="{{$book->item_name}}" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム２ -->
                    
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        金額
                      </label>
                      <input name="item_amount" value="{{$book->item_amount}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        コメント
                      </label>
                      <input name="comment" value="{{$book->comment}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!--カラム4-->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        購入したURL
                      </label>
                      <input name="item_URL" value="{{$book->item_URL}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム5 -->

                  </div>
                  <!-- 画像の保存 -->
                  <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block text-sm font-medium mb-2">画像</label>
                        <div class="flex items-end">
                            <input id="image" value="{{$book->image}}" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*' name="image">
                        </div>
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
        <!--左エリア[END]--> 
    
    
    <!--右側エリア[START]-->
    <!--compenent/collection部分[start]-->

    <!--右側エリア[[END]-->       

</div>
</div>
 <!--全エリア[END]-->

</x-app-layout>


