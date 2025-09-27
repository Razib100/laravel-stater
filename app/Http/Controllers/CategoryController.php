<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class CategoryController extends Controller
{
    public function category(Request $request){
//        $lang = $request->input('lang');
        $query = DB::table('category')->orderBy('id', 'desc');
//        if ($lang !== null) {
//            $query->where('lang', $lang);
//        }
        $datas = $query->paginate(10);
        return view('admin.category.list',compact('datas'));
    }

    public function categoryAdd($id = null)
    {
        $data = null;
        if ($id) {
            // Fetch data for editing
            $data = category::find($id);
            if (!$data) {
                return redirect()->route('category')->with('error', 'Category not found.');
            }
        }
        return view('admin.category.add', compact('data'));
    }
    public function categoryView($id = null)
    {
        $data = null;
        if ($id) {
            // Fetch data for editing
            $data = category::find($id);
            if (!$data) {
                return redirect()->route('category')->with('error', 'Category not found.');
            }
        }
        return view('admin.category.add', compact('data'));
    }
    public function categoryStore(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:98',
            'status' => 'required'
        ]);

        Category::create([
            'category_name' => $validated['category_name'],
            'category_content' => $request['category_content'],
            //'lang' => $request['lang'],
            'status' => $validated['status'],
            'date' => Carbon::today()->toDateString(),
        ]);

        return redirect()->route('category')->with('success', 'Category added successfully.');
    }

    public function categoryUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name' => 'nullable|string|max:98',
            'status' => 'required|in:0,1',
        ]);

        $data = category::find($id);
        if (!$data) {
            return redirect()->route('category')->with('error', 'Category not found.');
        }

        $data->update([
            'category_name' => $validated['category_name'],
            //'lang' => $request->lang ?? $data->lang,
            'category_content' => $request['category_content'],
            'status' => $validated['status'],
            'date' => Carbon::today()->toDateString(),
        ]);

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }
    public function categoryDelete($id)
    {
        $data = category::find($id);

        if (!$data) {
            return redirect()->route('category')->with('error', 'Category not found.');
        }

        $data->delete();

        return redirect()->route('category')->with('success', 'Category deleted successfully.');
    }
}
