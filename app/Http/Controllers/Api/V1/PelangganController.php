<?php



namespace App\Http\Controllers\Api\V1;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Resources\V1\PelangganCollection;
use App\Http\Resources\V1\PelangganResource;

class PelangganController extends Controller
{
    public function index()
    {
        // return PelangganResource::collection(Pelanggan::paginate(1));

        return new PelangganCollection(Pelanggan::all());
    }

    public function show(Pelanggan $pelanggan)
    {
        return new PelangganResource($pelanggan);
    }

    public function store(StorePelangganRequest $request)
    {
        Pelanggan::create($request->validated());

        return response()->json('Pelanggan Created');
    }

    public function update(StorePelangganRequest $request, Pelanggan $pelanggan)
    {

        $pelanggan->update($request->validated());

        return response()->json('Pelanggan Updated');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return response()->json('Pelanggan Deleted');
    }
}
