<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;
use Exception;

class AnnotationController extends Controller
{
    /**
     * display Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function displayForm()
    {
        return view('annotate');
    }

    /**
     * annotate Image
     *
     * @param Request $request
     */
    public function annotateImage(Request $request)
    {
        try {
            if ($request->file('image')) {
                $image = base64_encode(file_get_contents($request->file('image')));

                $request = new AnnotateImageRequest();
                $request->setImage($image);
                // dd($request);
                $request->setFeature("TEXT_DETECTION");

                $gcvRequest = new GoogleCloudVision([$request], env('GOOGLE_CLOUD_KEY'));
                $response = $gcvRequest->annotate();

                echo json_encode(["description" => $response->responses[0]->textAnnotations[0]->description]);
            }
        } catch (Exception $e) {
            echo json_encode(["code" => $e->getCode(), "errors" => $e->getMessage()]);
        }
    }
}