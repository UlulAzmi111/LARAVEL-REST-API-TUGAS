<?php



namespace App\Http\Controllers\Api\V1;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Resources\V1\BarangCollection;
use App\Http\Resources\V1\BarangResource;

class BarangController extends Controller
{
    public function index()
    {
        // return BarangResource::collection(Barang::paginate(1));

        return new BarangCollection(Barang::all());
    }

    public function show(Barang $Barang)
    {
        return new BarangResource($Barang);
    }

    public function store(StoreBarangRequest $request)
    {
        Barang::create($request->validated());

        return response()->json('Barang Created');
    }

    public function update(StoreBarangRequest $request, Barang $Barang)
    {

        $Barang->update($request->validated());

        return response()->json('Barang Updated');
    }

    public function destroy(Barang $Barang)
    {
        $Barang->delete();

        return response()->json('Barang Deleted');
    }
}
