<?php

function getKey() {
    return ["1234", "rahasia", "xyz"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "TM1", "konten" => "film ini film Transformers ke-1"],
        ["title" => "TM2", "konten" => "film ini film Transformers ke-2"],
        ["title" => "TM3", "konten" => "film ini film Transformers ke-3"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>