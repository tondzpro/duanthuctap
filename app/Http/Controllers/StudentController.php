{
//
public function index()
{
$title = "hello laravel";
$name = "thanghq12";
$products = DB::table('products')
->select('id', 'name') // lấy theo số trường mà mình mong muốn

->get();
// lấy theo điều kiện và trả về 1 dòng dữ liệu
$product = DB::table('products')
->where('id', '=', 1)

->first();
// thực hiện truy vấn theo nhiều điều kiện
// $productCondition = DB::table('products')
// ->where('id', '>=', 1)
// ->where('id', '<', 5) // tương đương với toán tử and // ->orWhere('email', '=', 'hassie96@example.net')
    // // tương đương với toán tử or
    // ->get();

    // $countStudent = DB::table('students')->count();

    //lấy toàn bộ dữ liệu của bảng students tương đương với
    // select * from students
    // dd($students);
    // return view('student.index', compact('title', 'name', 'products'));
    //tạo 1 route add-student và view add gồm form (input name,email)
    // }
    // public function add(StudentRequest $request)
    // {
    // if ($request->isMethod('POST')) { //tồn tại phương thức post

    // $products = Students::create($request->except('_token'));
    // if ($products->id) {
    // Session::flash('success', 'thêm mới thành công sinh viên');
    // return redirect()->route('route_product_add');
    // }
    // }
    // return view('student.add');
    // }
    // public function edit(StudentRequest $request, $id)
    // {
    //cách 1
    // $student = DB::table('students')
    // ->where('id',$id)->first();
    //cách 2
    // $student = Students::find($id);
    // if ($request->isMethod('POST')) {
    // $result = Students::where('id', $id)
    // ->update($request->except('_token'));
    // if ($result) {
    // Session::flash('success', 'sửa thành công sinh viên');
    // return redirect()->route('route_student_edit', ['id' => $id]);
    // }
    // }
    // return view('student.edit', compact('student'));
    // }
    // }