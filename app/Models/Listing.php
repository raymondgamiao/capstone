<?php

namespace App\Models;

class Listing
{
    public static function showAll()
    {
        return [
            [
                'id' => 1,
                'title' => 'one',
                'description' => 'Lorem Ipsum'
            ],
            [
                'id' => 2,
                'title' => 'two',
                'description' => 'Dolor Sit Amet'
            ]
        ];
    }

    public static function showOne($id)
    {
        $listings = self::showAll();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
