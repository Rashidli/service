<?php

namespace App\Http\Controllers;

use App\Http\Requests\IsaxtaranRequest;
use App\Http\Requests\IsciaxtaranRequest;
use App\Http\Requests\MehsulaxtaranRequest;
use App\Http\Requests\MehsulsatanRequest;
use App\Models\Add;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{

    public function isaxtaran_post(IsaxtaranRequest $request)
    {

        $validated = $request->validated();
        $validated['customer_id'] = Auth::guard('customer')->user()->id;
        Add::create($validated);

        return redirect()->route('pending')->with('message', 'Sizin elanınız yoxlamaya göndərildi!
Elanınız bütün qaydalara uyğun olarsa, saytda yerləşdiriləcək.');

    }

    public function isciaxtaran_post(IsciaxtaranRequest $request)
    {

        $validated = $request->validated();
        $validated['customer_id'] = Auth::guard('customer')->user()->id;
        Add::create($validated);

        return redirect()->route('pending')->with('message', 'Sizin elanınız yoxlamaya göndərildi!
Elanınız bütün qaydalara uyğun olarsa, saytda yerləşdiriləcək.');

    }

    public function mehsulaxtaran_post(MehsulaxtaranRequest $request)
    {

        $validated = $request->validated();
        $validated['customer_id'] = Auth::guard('customer')->user()->id;

        $fileUploadService = new FileService();
        $validated['product_image'] =  $fileUploadService->uploadFile($request->product_image, 'product_images');

        Add::create($validated);

        return redirect()->route('pending')->with('message', 'Sizin elanınız yoxlamaya göndərildi!
Elanınız bütün qaydalara uyğun olarsa, saytda yerləşdiriləcək.');

    }

    public function mehsulsatan_post(MehsulsatanRequest $request)
    {

        $validated = $request->validated();
        $validated['customer_id'] = Auth::guard('customer')->user()->id;
        $fileUploadService = new FileService();
        $validated['product_image'] =  $fileUploadService->uploadFile($request->product_image, 'product_images');

        Add::create($validated);

        return redirect()->route('pending')->with('message', 'Sizin elanınız yoxlamaya göndərildi!
Elanınız bütün qaydalara uyğun olarsa, saytda yerləşdiriləcək.');

    }

}
