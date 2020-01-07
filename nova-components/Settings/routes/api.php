<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Setting;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/getset', function (Request $request) {
    $settings = Setting::all();
    return $settings;
});
Route::post('/saveslider', function (Request $request) {
 
	$data = $request->all();

    $settings = new Setting;



    $settings->title = $data['title'];



    $settings->desc = $data['desc'];



   	if($request->get('image'))
       {

          $image = $request->get('image');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->save(public_path('images/').$name);
        }

    $settings->image = $name;

    $settings->save();

    return "slider saved";

});

Route::post('/deleteslider', function (Request $request) {
    
    $settings = Setting::findorfail($request->id);
    $settings->delete();

    return "deleted";
});

Route::post('/editslider', function (Request $request) {
    
    $settings = Setting::findorfail($request->id);

    return $settings;
});

Route::post('/saveedit', function (Request $request) {

    
    $settings = Setting::findorfail($request->id);

	$data = $request->all();

    $settings->title = $data['title'];

    $settings->desc = $data['desc'];

    if($request->get('image'))
       {
          $image = $request->get('image');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->save(public_path('images/').$name);

          $settings->image = $name;
        }

    

    $settings->save();

    return "updated";
});


Route::get('/companies', function (Request $request) {
    return Company::all();
});


Route::get('/deletecompany/{id}', function (Request $request,$id) {
    $company = Company::findOrFail($id);
    $company->delete();
    return '';
});


Route::post('/addcompany', function (Request $request) {
    $company = Company::create($request->all());
        return $company;
});

Route::post('/editcompanies/{id}', function (Request $request,$id) {
    $company = Company::findOrFail($id);
        $company->update($request->all());
        return $company;
});