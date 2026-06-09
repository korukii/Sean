<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Carbon\Carbon;
use Image;

class PortofolioController extends Controller
{
    public function AllPortfolio(){

        $allPortfolio = Portfolio::all();
        return view('admin.portfolio.all_portfolio',compact('allPortfolio'));

     } // End Method 

     public function AddPortfolio(){

        return view('admin.portfolio.add_portfolio');

     } // End Method 

     public function StorePortfolio(Request $request){

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now()
            ]); 

            $notification = array(
            'message' => 'Portfolio Inserted with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);

        } else {

            $notification = array(
            'message' => 'Please select an image', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 

     public function EditPortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio',compact('portfolio'));

     } // End Method 

     public function UpdatePortfolio(Request $request){

        $portfolio_id = $request->id;

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
            ]); 

            $notification = array(
            'message' => 'Portfolio Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);

        } else {

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
            ]); 

            $notification = array(
            'message' => 'Portfolio Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);

        } // end Else

     } // End Method 

     public function DeletePortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        $img = $portfolio->portfolio_image;
        unlink($img);

        Portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Portfolio Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     } // End Method 

     public function HomePortfolio(){

        $allPortfolio = Portfolio::all();
        return view('frontend.home_all.home_portfolio',compact('allPortfolio'));

     } // End Method 

}
