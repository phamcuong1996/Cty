<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;
use JoeDixon\Translation\Drivers\Translation;
use JoeDixon\Translation\Http\Requests\LanguageRequest;

class LoginController extends Controller
{
    private $translation;

    public function __construct(Translation $translation)
    {
        $this->translation = $translation;
    }

    public function index(Request $request)
    {
        $languages = $this->translation->allLanguages();

        return view('admins.index', compact('languages'));
        // return view('page.index');
    }

    public function adminLte(Request $request)
    {
        // return view('admins.index', compact('languages'));
        return view('admins.layout');
    }

    public function login(Request $request)
    {
        if ($request->has('image')) {

            try {
                $file = $request->file('image');
                $file_name = time() . $file->getClientOriginalName();
                $file->move(public_path('img'), $file_name);
                echo (new \TesseractOCR(public_path('img') . '/' . $file_name))
                    ->run();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            die();
        }
    }

    public function category(Request $request)
    {
        // return view('admins.index', compact('languages'));
        return view('page.category');
    }

    public function post(Request $request)
    {
        // return view('admins.index', compact('languages'));
        return view('page.post');
    }

    public function user(Request $request)
    {

        // return view('admins.index', compact('languages'));
        return view('page.user');
    }
}