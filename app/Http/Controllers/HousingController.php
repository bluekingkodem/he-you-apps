<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousingRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Housing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HousingController extends Controller
{
    public function index()
    {
        $housing = Housing::paginate(10);
        // $category = Category::where('id', '==', $housing);
        // $category = Category::all();
        // dd($category);

        return view('housing.list', [
            'housing' => $housing,
            // 'category' => $category
        ]);
    }

    public function show(Housing $housing)
    {
        return view('housing.show', ['housing' => $housing]);
    }

    public function create()
    {
        $category = Category::all();
        // $country = Country::all();
        return view('housing.create', ['category' => $category]);
    }

    public function store(HousingRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;

        /** @var UploadedFile|null $image */

        $image = $request->validated('image');

        if ($image != null && !$image->getError()) {
            $data['image'] = $image->store('housing', 'public');
        }

        $housing = Housing::create($data);

        return redirect()->route('housing.list', ['housing' => $housing])->with('success', 'Le logement a bien ete cree');
    }

    public function edit(Housing $housing)
    {
        $category = Category::all();

        return view('housing.edit', [
            'housing' => $housing,
            'category' => $category
        ]);
    }

    public function update(Housing $housing, HousingRequest $request)
    {
        $data = $request->validated();

        /** @var UploadedFile|null $image */

        $image = $request->validated('image');

        if ($image != null && !$image->getError()) {
            $data['image'] = $image->store('housing', 'public');
        }

        $housing->update($data);

        return redirect()->route('housing.create')->with('success', 'Le logement a bien ete modifie');
    }

    public function destroy(Housing $housing)
    {
        $housing->delete();

    }

    public function viewSearch()
    {
        $category = Category::all();

        return view('form_search', ['category' => $category]);
    }

    public function showAll()
    {
        $housing = Housing::paginate(10);

        return view('all_housing', ['housing' => $housing]);
    }

    public function filter(Request $request)
    {
        $query = Housing::query();

        if($request->has('address'))
        {
            $query->where('address', $request->address);
        }

        // if ($request->has('category')) {
        //     $cat = $query->where('category', $request->category);
        // }

        if ($request->has('price')) {
            $query->where('price', $request->price);
        }

        $housing = $query->get();
        // dd($housing);

        return view('all_housing', compact($housing));
    }
}
