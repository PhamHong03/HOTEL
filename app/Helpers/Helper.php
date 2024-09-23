<?php

namespace App\Helpers;
use Illuminate\Support\Str;

class Helper {
    public static function roomtype($roomtypes, $parent_id = 0, $char = '') {

        $html = '';
        foreach($roomtypes as $key => $roomtype) {
            if($roomtype->parent_id == $parent_id) {
                $html .= '
                    <tr>

                        <td>'.$roomtype->id.'</td>
                        <td>'. $char.$roomtype->name.'</td>
                        <td>' .$roomtype->description.'</td>
                        <td>' .$roomtype->price.'</td>
                        <td>'.$roomtype->updated_at.'</td>
                        <td>'.self::active($roomtype->active).'</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/roomtypes/edit/'. $roomtype->id.' " >
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href ="#" onclick="removeRow('.$roomtype->id.',  \'/admin/roomtypes/destroy\')" >
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>

                    </tr>
                ';
                unset($roomtypes[$key]);

                $html .= self::roomtype($roomtypes, $roomtype->id, $char. '|--|--' );
            } 
        }
        return $html;
    }

    public static function active($active = 0) :string
    {
        return $active == 0 ? '<span class = "btn btn-danger btn-xs">NO</span>' : '<span class = "btn btn-success btn-xs">YES</span>';
    }

    public static function roomtypes($roomtypes, $parent_id = 0) {
        $html = '';

        foreach($roomtypes as $key => $roomtype) {
            if($roomtype->parent_id == $parent_id) {
                $html .= '
                    <li class="">
                        <a href="/category/' . $roomtype->id. '-' . Str::slug($roomtype->name,'-'). '.html">
                            ' .$roomtype->name . '
                        </a>
                    </li>
                ';
            }
        }
        return $html;

    }
    public static function roomtypes2($roomtypes, $parent_id = 0) {
        $html = '';

        foreach($roomtypes as $key => $roomtype) {
            if($roomtype->parent_id == $parent_id) {
                $html .= '                   
                    <div class="category_roomtypes"> 
                        ' .$roomtype->name . '
                    </div>
                ';
            }
        }
        return $html;
    }

    public static function price($price = 0, $price_sale = 0)  {
        if($price_sale != 0) return number_format($price_sale);

        if($price != 0) return number_format($price_sale);

        return  '<a href="/lien-he.html">Liên Hệ</a>';
    }
    
    public static function price_price($price) {
        return number_format($price);
    }


    public static function price_sal($price, $price_sale) {
        $price_sal = number_format($price - ( $price * ($price_sale / 100)));

        return $price_sal;
    }
    public static function price_s($price, $price_sale) {
        $price_sal = $price - ( $price * ($price_sale / 100));

        return $price_sal;
    }

    public static function amenity_price($price) {
        
        return number_format($price);
    }
}
