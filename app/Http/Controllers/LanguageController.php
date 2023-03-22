<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;
use JoeDixon\Translation\Drivers\Translation;
use JoeDixon\Translation\Http\Requests\LanguageRequest;

class LanguageController extends Controller
{
    private $translation;

    public function __construct(Translation $translation)
    {
        $this->translation = $translation;
    }

    public function language(Request $request)
    {
        $language = $request->language;
        // App::setLocale($language);
        session()->put('locale', $language);
        // session()->put('baitap', "mcuong");
        // dd(session()->get('baitap'));

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $languages = $this->translation->allLanguages();

        return view('translation::languages.index', compact('languages'));
    }

    public function create()
    {
        $languages = $this->translation->allLanguages();
        $language = 'vi';
        $name ='language';
        return view('translation::languages.create', compact('languages','language','name'));
    }

    public function store(LanguageRequest $request)
    {
        $this->translation->addLanguage($request->locale, $request->name);

        return redirect()
            ->route('languages.index')
            ->with('success', __('translation::translation.language_added'));
    }
}