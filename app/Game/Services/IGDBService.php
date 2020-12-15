<?php

namespace App\Game\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class IGDBService
{
    /**
     * @var array
     */
    protected $auth;
    /**
     * @var mixed
     */
    private $accessToken;

    public function __construct()
    {
        $this->auth = Http::post('https://id.twitch.tv/oauth2/token', config('services.igdb'))->json();
    }

    private function getAccessToken()
    {
        return $this->accessToken = $this->auth['access_token'];
    }

    private function createAuthorizationHeader()
    {
        return 'Bearer ' . $this->getAccessToken();
    }

    public function getPopularGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        return Http::withHeaders([
            'Client-ID'     => config('services.igdb')['client_id'],
            'Authorization' => $this->createAuthorizationHeader(),
        ])->withBody("fields name,aggregated_rating,rating,rating_count, cover.url, first_release_date, platforms.abbreviation;
        where platforms = (48,49,130,6)
        & (first_release_date > {$before}
        & first_release_date < {$after}
        & rating_count > 5);
        sort rating desc;
        limit 12;", '')
            ->post('https://api.igdb.com/v4/games/')
            ->json();
    }

    public function getRecentlyReviewedGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        return Http::withHeaders([
            'Client-ID'     => config('services.igdb')['client_id'],
            'Authorization' => $this->createAuthorizationHeader(),
        ])->withBody("fields name,storyline, summary, cover.url, first_release_date, platforms.abbreviation, rating,rating_count;
        where platforms = (48,49,130,6)
        & (first_release_date > {$before}
        & first_release_date < {$current}
        & rating_count > 5);
        sort rating desc;
        limit 3;", '')
            ->post('https://api.igdb.com/v4/games/')
            ->json();
    }

    public function getMostAnticipatedGames()
    {
        $current = Carbon::now()->timestamp;
        $after = Carbon::now()->addMonths(4)->timestamp;


        return Http::withHeaders([
            'Client-ID'     => config('services.igdb')['client_id'],
            'Authorization' => $this->createAuthorizationHeader(),
        ])->withBody("fields name,storyline, summary, cover.url, first_release_date, platforms.abbreviation, rating,rating_count;
        where platforms = (48,49,130,6)
        & (first_release_date > {$current}
        & first_release_date < {$after});
        sort rating desc;
        limit 4;", '')
            ->post('https://api.igdb.com/v4/games/')
            ->json();
    }
}
