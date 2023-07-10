<?php

namespace Glaring\Filesystem;

class Response
{
    public $URL_FILE_UPLOAD_OK = [
        "code" => "200",
        "file_url" => ""
    ];

    const FILE_UPLOAD_OK = [
        "code" => "200",
        "msg" => "업로드가 완료되었습니다."
    ];

    const FILE_DELETE_OK = [
        "code" => "200",
        "res_msg" => "삭제가 완료되었습니다."
    ];

    const FILE_UPLOAD_ALLOW_FILE = [
        "code" => "400",
        "error" => "허용하지 않는 파일을 추가하였습니다."
    ];

    const LOCATION_NOT_ALLOW = [
        "code" => "403",
        "file_url" => "해당 경로는 사용할 수 없습니다."
    ];

    const TOKEN_NOT_FOUND = [
        "code" => "404",
        "res_msg" => "토큰을 찾을 수 없습니다. 확인 후, 다시 시도해주세요."
    ];

    const BUCKET_NOT_FOUND = [
    "code" => "404",
    "res_msg" => "버킷과 토큰을 찾을 수 없습니다. 확인 후, 다시 시도해주세요."
    ];

    const URL_NOT_FOUND = [
        "code" => "404",
        "res_msg" => "주소를 찾을 수 없습니다. 주소가 있는지 확인해주시거나 담당 관리자에게 문의해주세요."
    ];

    const FILE_DELETE_NOT_FOUND = [
        "code" => "404",
        "res_msg" => "이미 삭제되었거나 파일을 찾을 수 없습니다."
    ];

    const FILE_UPLOAD_CONFLICT = [
        "code" => "409",
        "isRequestOverwrite" => true,
        "error" => "이미 존재하는 파일입니다."
    ];

    const FILE_UPLOAD_FAILED = [
        "code" => "500",
        "file_url" => "잘못된 서버 요청입니다. 확인 후 다시 시도해주세요."
    ];

    const FILE_DELETE_FAILED = [
        "code" => "500",
        "res_msg" => "서버가 응답할 수 없는 요청입니다."
    ];

    const FILE_DELETE_UNKNOWN_ERROR = [
        "code" => "501",
        "res_msg" => "예상하지 못한 사항으로 삭제를 진행할 수 없습니다."
    ];

    public function setUrlFileUploadOk($url) {
        $this->URL_FILE_UPLOAD_OK['file_url'] = $url;
    }

    public function getUrlFileUploadOk() {
        return $this->URL_FILE_UPLOAD_OK;
    }
}