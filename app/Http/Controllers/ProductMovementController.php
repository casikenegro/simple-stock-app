<?php

namespace App\Http\Controllers;

use App\Models\ProductMovement;
use App\Models\Product;
use App\Repositories\ProductMovementRepository;
use Illuminate\Http\Request;
use App\Exports\ProductMovementsExport;
use Maatwebsite\Excel\Facades\Excel;
use Flash;
use Response;

class ProductMovementController extends Controller
{
    private $productMovement;

    public function __construct(ProductMovementRepository $productMovement)
    {
        $this->productMovement = $productMovement;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $productMovements = new ProductMovement;
        $typeSerch =   array (
            "product_id"=>"Producto", 
            "movement"=>"Movimiento",
            "quantity"=>"Cantidad",
            "retry_name"=>"Nombre de Quien Retira",
            "document"=>"Documento",
            "employee"=>"Bodeguero",
            "is_valid"=>"Estado del Movimiento",
            "ot"=>"OT"
        );
        if($request->search){
            if(array_search($request->typeSearch,$typeSerch) === "product_id"){
                $products = Product::where("code",'LIKE','%'.$request->search.'%')->get();
                $products = $products->map(function($product){
                    return $product->id;
                });
                $productMovements = $productMovements->whereIn("product_id",$products);
            } else{
                $productMovements = $productMovements->where(array_search($request->typeSearch,$typeSerch),'LIKE','%'.$request->search.'%');
            }
        }
        if($request->init_date && $request->last_date){
            $productMovements = $productMovements->whereBetween("created_at",[$request->init_date,$request->last_date ]);
        }
        return view('productMovements.index')
            ->with('productMovements', $productMovements->get())
            ->with('searchs',$typeSerch);
    }


    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        $data = Product::all();

        return view('productMovements.create')->with("products",$data)
            ->with("typeMovements",["Entrada","Salida"])->with("productMovement",false)
            ->with("booleans",["Valido","Invalido"]);
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->productMovement->create($request->all());
        $product = Product::find($request->product_id);

        if($request->movement === "Entrada"){
            $product->current_stock = $product->current_stock + $request->quantity;
        }else{
            if($request->quantity > $product->current_stock ){
                $product->current_stock = 0;
            }
            $product->current_stock = $product->current_stock - $request->quantity;
        }
        $product->save();
        Flash::success(__('messages.saved', ['model' => __('models/productMovements.singular')]));

        return redirect(route('movements.index'));
    }

    public function download(Request $request){
        $productMovements = new ProductMovement;
        if($request->ot){
            $productMovements = $productMovements->where("ot",$request->ot);
            return Excel::download(new ProductMovementsExport($productMovements), 'movementsProducts.xlsx');
        }
        if($request->init_date && $request->last_date){
            $productMovements = $productMovements->whereBetween("created_at",[$request->init_date,$request->last_date ]);
            return  Excel::download(new ProductMovementsExport($productMovements), 'movementsProducts.xlsx');
        }
        if($request->code){
            $product = Product::where("code",$request->code)->first();
            if($product){
                $productMovements = $productMovements->where("product_id",$product->id);
               return Excel::download(new ProductMovementsExport($productMovements), 'movementsProducts.xlsx');
            }
        }
        return view('productMovements.download')
            ->with('productMovements', $productMovements->get());
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productMovement = $this->productMovement->find($id);

        if (empty($productMovement)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productMovements.singular')]));

            return redirect(route('movements.index'));
        }

        return view('productMovements.show')->with('productMovement', $productMovement);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productMovement = $this->productMovement->find($id);
        $data = Product::all();
        if (empty($productMovement)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productMovements.singular')]));

            return redirect(route('movements.index'));
        }

        return view('productMovements.edit')
            ->with('productMovement', $productMovement)
            ->with("products",$data)->with("typeMovements",["Entrada","Salida"])
            ->with("booleans",["Valido","Invalido"]);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return Response
     */
    public function update(Request $request,$id)
    {
        if (empty($this->productMovement->find($id))) {
            Flash::error(__('messages.not_found', ['model' => __('models/productMovements.singular')]));
            return redirect(route('movements.index'));
        }
        $this->productMovement->update($request->all(), $id);
        Flash::success(__('messages.updated', ['model' => __('models/productMovements.singular')]));

        return redirect(route('movements.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Product = $this->productMovement->find($id);

        if (empty($Product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productMovements.singular')]));

            return redirect(route('movements.index'));
        }

        $this->productMovement->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/productMovements.singular')]));

        return redirect(route('movements.index'));
    }
}
