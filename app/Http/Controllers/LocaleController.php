<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke($locale)
    {
        if (! in_array($locale, config('app.supported_languages'))) {
            $locale = app()->getLocale();
        }

        app()->setLocale($locale);

        session()->put('locale', $locale);

        return back();
    }
}
