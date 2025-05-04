    <?php

    namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        public function index()
        {
            return Product::with('category')->get();
        }

        public function show($id)
        {
            return Product::with('category')->findOrFail($id);
        }

        public function store(Request $request)
        {
            $fields = $request->validate([
                'name' => 'required|string',
                'description' => 'required|string',
                'goal_amount' => 'required|integer',
                'collected_amount' => 'nullable|integer',
                'image' => 'nullable|image|max:2048'
            ]);
        
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $fields['image'] = '/storage/' . $imagePath;
            }
        
            $fields['collected_amount'] = $fields['collected_amount'] ?? 0;
        
            return Product::create($fields);
        }
        
        public function update(Request $request, $id)
        {
            $product = Product::findOrFail($id);
            $product->update($request->all());
            return $product;
        }

        public function destroy($id)
        {
            return Product::destroy($id);
        }
    }
