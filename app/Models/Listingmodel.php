<?php
namespace app\models;

class Listing {
   public  static function all()
   {
return [
            [
                'id'=> 1,
                'title'=> 'House for sa1e1',
                'price'=> 1000000,
                'description'=> 'Lorem ipsum dolor sit amet, consectetur
            adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.'

            ],
            [
                'id'=> 2,
                'title'=> 'House for sale2',
                'price'=> 1000000,
                'description'=> 'Lorem ipsum dolor si
            adipisicing elit, sed do eiusmod temp
            dolore magna aliqua.'
            ]
    ];

  }
public static function find($id){

    $listings = self::all();
    foreach($listings as $listing){
    if($listing['id'] == $id){
        return $listing;
    }
    }
 }
}
