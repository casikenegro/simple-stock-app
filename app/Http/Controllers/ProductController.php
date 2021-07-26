<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;

use Flash;
use Response;

class ProductController extends AppBaseController
{
    private $ProductRepository;

    public function __construct(ProductRepository $ProductRepo)
    {
        $this->ProductRepository = $ProductRepo;
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
        $typeSerch =   array (
            "code"=>'Codigo', 
            "unit"=>'Unidad',
            "description"=>'Descripcion', 
            "current_stock"=>"Stock Actual",
            "min_stock"=>'Stock Minimo',
            "max_stock"=>'Maximo Stock',
            "point_order"=>'Punto de re-orden', 
            "value"=>'Valor',
        );
        $products = new Product;
        $products = $products->sortable();
        if($request->search){
            $products = $products->where(array_search($request->typeSearch,$typeSerch),'LIKE','%'.$request->search.'%');
        }
        return view('products.index')
            ->with('products', $products->get())
            ->with('searchs',$typeSerch);
        }

    public function selectSearch(Request $request)
    {
    	$product = new Product;

        if($request->has('q')){
            $search = $request->q;
            $product =Product::select("id", "code",'description')
            		->where('code', 'LIKE', "%$search%");
        }
        return response()->json($product->get());
    }


    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $Product = $this->ProductRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
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
        $product = $this->ProductRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
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
        $product = $this->ProductRepository->find($id);

        if (empty($product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $Product = $this->ProductRepository->find($id);

        if (empty($Product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        $Product = $this->ProductRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
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
        $Product = $this->ProductRepository->find($id);

        if (empty($Product)) {
            Flash::error(__('messages.not_found', ['model' => __('models/products.singular')]));

            return redirect(route('products.index'));
        }

        $this->ProductRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/products.singular')]));

        return redirect(route('products.index'));
    }
}
