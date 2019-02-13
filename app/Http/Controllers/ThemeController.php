<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class ThemeController extends Controller
{
    public function pickTheme($theme) {


        switch ($theme) {
            case "orange":
                $themeurl = 'orange.css';
                break;
            case "blue":
               $themeurl = 'blue.css';
                break;
            case "pink":
                $themeurl = 'pink.css';
                break;
            case "aqua":
                $themeurl = 'aqua.css';
                break;
            default:
                $themeurl = null;
        }

        $cookie = Cookie::forever('theme', $themeurl);

        return redirect()->back()->cookie($cookie);



    }
}
