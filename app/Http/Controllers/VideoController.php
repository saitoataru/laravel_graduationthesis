<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function stream(Request $request){

    $path = storage_path('app/public/video/700749421.782887.mp4');

    $file_size = filesize($path);
    $fp = fopen($path, 'rb');
    $status_code = 200;
    $headers = [
        'Content-type' => 'video/mp4',
        'Accept-Ranges' => 'bytes',
        'Content-Length' => $file_size
    ];

    $range = $request->header('Range');

    if(!is_null($range)) {

        if(preg_match('|bytes=([0-9]+)\-|', $range, $matches)) {

            $start = intval($matches[1]);

            if(fseek($fp, $start) === 0) {

                $status_code = 206;
                $headers['Content-Length'] = $file_size - $start;
                $headers['Content-Range'] = sprintf(
                    'bytes %d-%d/%d',
                    $start,
                    ($file_size-1),
                    $file_size
                );

            }

        }

    }

return
response()->stream(function() use($fp) {
    fpassthru($fp);
}, 200, [
    'Content-Type' => 'video/mp4'
]);

// Bladeテンプレートにファイルストリームを渡す
// return view('mp4', [
//     'fileStream' => response()->stream(function() use($fp) {
//         fpassthru($fp);
//     }, 200, [
//         'Content-Type' => 'video/mp4'
//     ])
// ]);

// ファイルストリームを生成
// $videoStream = response()->stream(function() use($fp) {
// fpassthru($fp);
// }, 200, [
//     'Content-Type' => 'video/mp4'
// ]);

// // return $videoStream;


// // Bladeテンプレートに渡す
// return view('mp4')->with('videoStream',$videoStream);
    }
}
