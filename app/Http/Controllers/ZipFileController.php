<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use ZanySoft\Zip\ZipManager;
use Zip;
use ZipArchive;

class ZipFileController extends Controller
{
    public function index(){
     $zip = new ZipArchive;
    $fileName = 'myNewFile.zip';
    dd($zip);
$compressed = gzcompress('Compress me', 9);
dd($compressed);

$zip = Zip::open('file.zip');
dd($zip);
        $manager = new ZipManager();
$manager->addZip( Zip::open('/zipfile/THU_CGStore.zip') );
dd($manager);

        $is_valid = Zip::check('file.zip');
        return $is_valid;
        // /home/hatem/Desktop/toaster/public/zipfile/THU_CGStore.zip
        $path = asset('zipfile/THU_CGStore.zip');
        $zip = Zip::open('file.zip');
        $zip->extract('/zipfile/THU_CGStore.zip');
        dd($zip);
        // $zip->extract('/path/to/uncompressed/files');
    }
    public function test(){
        $path = asset('zipfile/testone.zip');
        $zip = new \ZipArchive();
    }
  
}
