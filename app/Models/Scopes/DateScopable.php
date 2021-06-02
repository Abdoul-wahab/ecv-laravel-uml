<?php

namespace App\Models\Scopes;

use Illuminate\Support\Carbon;

trait DateScopable
{

    public function scopeOfPeriod($query, $startAt, $endAt)
    {
        return $query->whereBetween(
            'created_at',
            [
                $startAt,
                $endAt
            ]
        );
    }

    
    public function scopeOfTheDay($query)
    {
        return $query->whereBetween(
            'created_at',
            [
                Carbon::now()->startOfDay(),
                Carbon::now()->endOfDay()
            ]
        );
    }

    public function scopeOfTheMonth($query)
    {
        return $query->whereBetween(
            'created_at',
            [
                Carbon::parse('this month')->startOfMonth(),
                Carbon::parse('this month')->endOfMonth()
            ]
        );
    }

    public function scopeOfTheWeek($query)
    {
        return $query->whereBetween(
            'created_at',
            [
                Carbon::parse('this month')->startOfWeek(),
                Carbon::parse('this month')->endOfWeek()
            ]
        );
    }

    public function scopeOfTheLastMonth($query)
    {
        return $query->whereBetween(
            'created_at',
            [
                Carbon::parse('last month')->startOfMonth(),
                Carbon::parse('last month')->endOfMonth()
            ]
        );
    }

    public function scopeOneMonthOld($query)
    {
        return $query->whereDate('created_at', '<=', Carbon::parse('1 month ago'));
    }
}