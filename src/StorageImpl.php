<?php
namespace Glaring\Filesystem;

interface StorageImpl
{
    function upload($bucket, $sToken, $folder, $file, $overwrite);

    function deleteLocalPath($bucket, $folder, $localPath);

    function deleteFullPath($bucket, $sToken, $fullPath);
}