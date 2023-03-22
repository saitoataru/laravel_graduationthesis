@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
<html>
<head>
    <meta charset='utf-8' />
</head>
<body>
    {{-- フォーム --}}
    <form method="POST">
        @csrf
        <textarea rows="10" cols="50" name="sentence">{{ isset($sentence) ? $sentence : '' }}</textarea>
        <button type="submit">検索</button>
    </form>

    {{-- 結果 --}}
    {{ isset($chat_response) ? $chat_response : '' }}
</body>
</html>
</x-app-layout>
    