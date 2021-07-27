<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    protected $count = [];
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locale = 'ru')
    {
        App::setLocale($locale);

        $this->count['best']['count'] = Reviews::where('review_rating', 5)->count();
        $this->count['good']['count'] = Reviews::where('review_rating', 4)->count();
        $this->count['normal']['count'] = Reviews::where('review_rating', 3)->count();
        $this->count['bed']['count'] = Reviews::where('review_rating', 2)->count();
        $this->count['worst']['count'] = Reviews::where('review_rating', 1)->count();

        $this->count['best']['percentage'] = $this->getPercentage($this->count['best']['count']);
        $this->count['good']['percentage'] = $this->getPercentage($this->count['good']['count']);
        $this->count['normal']['percentage'] = $this->getPercentage($this->count['normal']['count']);
        $this->count['bed']['percentage'] = $this->getPercentage($this->count['bed']['count']);
        $this->count['worst']['percentage'] = $this->getPercentage($this->count['worst']['count']);

        return view('dashboard', ['count' => $this->count]);
    }

    /**
     * @return int|mixed
     */
    protected function getCountSum()
    {
        $sum = 0;

        foreach ($this->count as $item) {
            $sum += $item['count'];
        }

        return $sum;
    }

    /**
     * @return int|mixed
     */
    protected function getPercentage($count)
    {
        $sum = $this->getCountSum();

        if (0 === $sum) {
            return $sum;
        }

        return ceil(($count * 100) / $sum);
    }
}
