<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of partners with search and pagination.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        
        $partners = Partner::query()
            ->when($search, function ($query) use ($search) {
                $query->search($search);
            })
            ->get();

        return view('admin.partners.index', compact('partners', 'search'));
    }

    /**
     * Show the form for creating a new partner.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created partner in storage.
     * Support single dan multi-upload
     */
    public function store(Request $request)
    {
        // Validasi untuk single upload
        $rules = [
            'website' => 'required|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];

        // Jika multi-upload (multiple logos)
        if ($request->hasFile('logos')) {
            $rules['logos'] = 'required|array';
            $rules['logos.*'] = 'image|mimes:jpeg,png,jpg|max:2048';
            $rules['names'] = 'required|array';
            $rules['names.*'] = 'required|string|min:1|max:255';
        } else {
            $rules['name'] = 'required|string|min:1|max:255';
        }

        $validated = $request->validate($rules);

        // Handle multi-upload (bulk insert)
        if ($request->hasFile('logos')) {
            $logos = $request->file('logos');
            $names = $request->input('names');
            
            foreach ($logos as $key => $logoFile) {
                $filename = time() . '_' . uniqid() . '.' . $logoFile->getClientOriginalExtension();
                $path = $logoFile->storeAs('partners', $filename, 'public');

                Partner::create([
                    'name' => $names[$key] ?? 'Partner ' . ($key + 1),
                    'logo' => $path,
                    'website' => $request->input('website'),
                    'description' => $request->input('description'),
                    'status' => $request->input('status', 'active'),
                ]);
            }

            return redirect()->route('partners.index')
                ->with('success', 'Partners berhasil ditambahkan!');
        }

        // Handle single upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoFile = $request->file('logo');
            $filename = time() . '_' . uniqid() . '.' . $logoFile->getClientOriginalExtension();
            $logoPath = $logoFile->storeAs('partners', $filename, 'public');
        }

        Partner::create([
            'name' => $validated['name'],
            'logo' => $logoPath,
            'website' => $validated['website'],
            'description' => $validated['description'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified partner.
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified partner in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'website' => 'required|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle logo update - hapus logo lama jika ada logo baru
        $logoPath = $partner->logo;
        if ($request->hasFile('logo')) {
            if ($logoPath && Storage::disk('public')->exists($logoPath)) {
                Storage::disk('public')->delete($logoPath);
            }

            $logoFile = $request->file('logo');
            $filename = time() . '_' . uniqid() . '.' . $logoFile->getClientOriginalExtension();
            $logoPath = $logoFile->storeAs('partners', $filename, 'public');
        }

        $partner->update([
            'name' => $validated['name'],
            'website' => $validated['website'],
            'logo' => $logoPath,
            'description' => $validated['description'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil diperbarui!');
    }

    /**
     * Remove the specified partner from storage.
     */
    public function destroy(Partner $partner)
    {
        // Hapus file logo dari storage
        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil dihapus!');
    }

    /**
     * Toggle partner status via AJAX
     */
    public function toggleStatus(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $partner->update(['status' => $validated['status']]);

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diubah!',
            'status' => $partner->status,
        ]);
    }

    // Tambahkan fungsi ini di dalam PartnerController kamu
public function publicDetail()
{
    // Mengambil semua data partner yang berstatus aktif
    $activePartners = \App\Models\Partner::where('status', 'active')->get();
    
    // Mengembalikan view halaman detail partner baru sambil membawa data partner
    return view('frontend.partner_detail', compact('activePartners'));
}
}

