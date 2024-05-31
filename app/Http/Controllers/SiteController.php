<?php

namespace App\Http\Controllers;

use App\Constants\DocumentTypes;
use App\Models\Category;
use App\Models\Site;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(): View
    {
        $sites = Site::query()->select(['id', 'slug', 'name', 'category_id'])
            ->with('category:id,name')
            ->orderBy('name')
            ->get();

        return view('sites.index', compact('sites'));
    }

    public function create(): View
    {
        $categories = Category::all();
        $documentTypes = DocumentTypes::cases();
        return view('sites.create', compact('categories', 'documentTypes'));
    }

    public function edit(Site $site): View
    {
        $categories = Category::all();
        $documentTypes = DocumentTypes::cases();
        return view('sites.edit', compact('site', 'categories', 'documentTypes'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'slug' => 'required|max:50',
            'name' => 'required|max:100',
            'documentType' => 'required',
            'document' => 'required|max:20',
        ]);

        Site::create($request->all());
        return redirect()->route('sites.index');
    }

    public function show(Site $site): View
    {
        return view('sites.show', compact('site'));
    }

    public function update(Request $request, Site $site): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'slug' => 'required|max:50',
            'name' => 'required|max:100',
            'documentType' => 'required',
            'document' => 'required|max:20',
        ]);

        $site->update($request->all());
        return redirect()->route('sites.index');
    }

    public function destroy(Site $site): RedirectResponse
    {
        $site->delete();
        return redirect()->route('sites.index');
    }
}
