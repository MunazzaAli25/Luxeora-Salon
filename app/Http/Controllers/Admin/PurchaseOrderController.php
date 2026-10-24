<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PurchaseOrder;
use App\Models\Supplier;
use App\Models\InventoryItem;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $orders = PurchaseOrder::with(['supplier', 'inventoryItem'])->latest()->get();
        $suppliers = Supplier::all();
        $items = InventoryItem::all();

        return view('Admin.purchase-orders.index', compact('orders', 'suppliers', 'items'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'inventory_item_id' => 'required|exists:inventory_items,id',
            'quantity' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
            'status' => 'required|in:pending,received,cancelled',
            'order_date' => 'required|date',
        ]);

        PurchaseOrder::create($validated);

        return redirect()->back()->with('success', 'Purchase order created successfully.');
    }

    public function update(Request $request, $id)
    {
        $order = PurchaseOrder::findOrFail($id);

        $validated = $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'inventory_item_id' => 'required|exists:inventory_items,id',
            'quantity' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
            'status' => 'required|in:pending,received,cancelled',
            'order_date' => 'required|date',
        ]);

        $order->update($validated);

        return redirect()->back()->with('success', 'Purchase order updated successfully.');
    }

    public function destroy($id)
    {
        $order = PurchaseOrder::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Purchase order deleted successfully.');
    }
}