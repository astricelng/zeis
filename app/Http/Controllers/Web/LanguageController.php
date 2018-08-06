<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use function implode;
use function in_array;

class LanguageController extends Controller
{
    //
    public function switchLang(Request $request, $lang)
    {
        // Store the URL on witch the user was
        $previous_url = url()->previous();
    
        // Clean de previous URL
        $previous_url_segments = explode('/', $previous_url);
        $lang_index = -1;
    
        foreach ($previous_url_segments as $index => $partial)
        {
            if (in_array($partial, config('translatable.locales')))
            {
                $lang_index = $index;
                break;
            }
        }
    
        $previous_url_segments = array_slice($previous_url_segments, $lang_index);
    
        // Build the cleaned previous url to generate request
        $previous_url = implode('/', $previous_url_segments);
    
        // Transform it into a correct request instance
        $previous_request = app('request')->create($previous_url);
    
        // Get query parameters if applicable
        $query = $previous_request->query();
    
        // Store the segments of the last request as an array
        $segments = $previous_request->segments();
    
        // In case the route name was translated
        $route_name = app('router')->getRoutes()->match($previous_request)->getName();
    
        // Check if the first segment matches a language code
        if (in_array($lang, config('translatable.locales')))
        {
            $new_route = null;
            
            // If it was indeed a translated route name from static localization
            if ($route_name && Lang::has('routes.' . $route_name, $lang))
            {
                // Translate the route name to get the correct URI in the required language, and redirect to that URL
                
                // Complete the new route
                $new_route = $lang . '/' . trans('routes.' . $route_name, [], $lang);
                
                // If the URI has a query data add it to the end of the new translated route
                if (count($query))
                {
                    $new_route = $new_route . '?' . http_build_query($query);
                }
            
                // Redirect to new route
                return redirect()->to($new_route);
            }
        
            // Else, replace the first segment by the new language code
            $segments[0] = $lang;
            
            // Complete the new route
            $new_route = implode('/', $segments);
            
            // Build the new translated route to be redirected
            // If the URL has a query data add it to the end of the new translated route
            if (count($query))
            {
                $new_route = $new_route . '?' . http_build_query($query);
            }

            // Redirect to new route
            return redirect()->to($new_route);
        
        }
    
        // Redirect to previous URI
        return redirect()->back();
    }
}
