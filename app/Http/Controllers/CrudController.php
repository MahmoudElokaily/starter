<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function create(){
        return view('offers.create');
    }
    public function store(offerRequest $request){
//        // validator
//        $rules = [
//            'name' => 'required|max:50|unique:offers',
//            'price' => 'required',
//        ];
//        $messeges = [
//            'name.required' => 'اسم العرض مطلوب',
//            'price.required' => 'السعر مطلوب',
//        ];

//        $validator = Validator::make($request->all() , $rules , $messeges);

//        if ($validator->fails()){
//            return redirect()->back()->withErrors($validator)->withInput($request->all());
//        }
//        else {
            Offer::create([
                'name' => $request->name,
                'price' => $request->price,
            ]);
            return redirect()->back()->with(['success' => 'تم اضافة العرض بنجاح']);
//        }
    }

    public function getAllOffers(){
        $offers = Offer::select('id' , 'name' ,'price')->get();
        return view('offer.all' , compact(offers));
    }

}
