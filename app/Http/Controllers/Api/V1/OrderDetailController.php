<?php



namespace App\Http\Controllers\Api\V1;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderDetailRequest;
use App\Http\Resources\V1\OrderDetailCollection;
use App\Http\Resources\V1\OrderDetailResource;

class OrderDetailController extends Controller
{
    public function index()
    {
        // return OrderDetailResource::collection(OrderDetail::paginate(1));

        return new OrderDetailCollection(OrderDetail::all());
    }

    public function show(OrderDetail $orderdetail)
    {
        return new OrderDetailResource($orderdetail);
    }

    public function store(StoreOrderDetailRequest $request)
    {
        OrderDetail::create($request->validated());

        return response()->json('OrderDetail Created');
    }

    public function update(StoreOrderDetailRequest $request, OrderDetail $orderdetail)
    {

        $orderdetail->update($request->validated());

        return response()->json('OrderDetail Updated');
    }

    public function destroy(OrderDetail $orderdetail)
    {
        $orderdetail->delete();

        return response()->json('OrderDetail Deleted');
    }
}
