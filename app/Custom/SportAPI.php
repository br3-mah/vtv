<?php
namespace App\Custom;


class SportAPI {

    // public static function getAllVideos()
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-videos?tconst=tt0944947&limit=25&region=US",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => [
    //             "x-rapidapi-host: imdb8.p.rapidapi.com",
    //             "x-rapidapi-key: c760539c3dmshcce41028fd9cf47p1c3e4ejsnc7486d3ef21b"
    //         ],
    //     ]);
        
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
        
    //     curl_close($curl);
        
    //     if ($err) {
    //         return "cURL Error #:" . $err;
    //     } else {
    //         return json_decode($response);
    //     }
    // }
    public static function getAllSoccer()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://free-football-soccer-videos.p.rapidapi.com/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: free-football-soccer-videos.p.rapidapi.com",
                "x-rapidapi-key: c760539c3dmshcce41028fd9cf47p1c3e4ejsnc7486d3ef21b"
            ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }
}
