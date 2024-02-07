<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\Peta;
use Illuminate\Http\Request;
use App\Http\Requests\Peta\StoreRequest;
use App\Http\Requests\Peta\UpdateRequest;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('peta.index', [
            'petas' => Peta::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('peta.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/gambar', request()->file('gambar'));
            $validated['gambar'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Peta::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Post created successfully!');
            return redirect()->route('petas');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('peta.show', [
            'post' => Peta::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('peta.form', [
            'post' => Peta::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $post = peta::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('gambar')) {
            // delete image
            Storage::disk('public')->delete($post->gambar);

            $filePath = Storage::disk('public')->put('images/petas/featured-images', request()->file('gambar'), 'public');
            $validated['gambar'] = $filePath;
        }

        $update = $post->update($validated);

        if($update) {
            session()->flash('notif.success', 'Post updated successfully!');
            return redirect()->route('petas.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $post = Peta::findOrFail($id);

        Storage::disk('public')->delete($post->gambar);

        $delete = $post->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Post deleted successfully!');
            return redirect()->route('petas.index');
        }

        return abort(500);
    }
}