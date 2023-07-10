<?php

namespace Glaring\Filesystem;

class Storage implements StorageImpl
{

    public $url = "";

    public function setUrl($url) {
        $this->url = $url;
    }

    public function upload($bucket, $token, $folder, $file, $overwrite)
    {
        $post = [
        'bucket' => $bucket,
        'stoken' => $token,
        'folder' => $folder,
        'file_data'=> new CURLFile($file['tmp_name'], $file['type'], $file['name']),
        'overwrite' => $overwrite
        ];
        $headers = array("Content-Type:multipart/form-data");
        $result = Curl::postCurl($this->url, $post, $headers);

        return $result;
    }

    public function deleteLocalPath($bucket, $token, $localPath)
    {
        $post = [
        "bucket" => $bucket,
        "stoken" => $token,
        "path" => $localPath
        ];
        $result = Curl::postCurl($this->url, $post);

        return $result;
    }

    public function deleteFullPath($bucket, $token, $fullPath)
    {
        $post = [
        "stoken" => $token,
        "path" => $fullPath
        ];
        $result = Curl::postCurl($this->url, $post);

        return $result;
    }
}