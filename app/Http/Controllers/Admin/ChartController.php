<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// use Illuminate\Support\Carbon;
// use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf as  reportpdf;
use Illuminate\Support\Facades\Date;

class ChartController extends Controller
{
    function index_chart(){
        return view('admin.analy.charts');
    }
    function index_table()
    {
        return view('admin.analy.tables');
    }

    function users_info(int $usr_id)
    {
        // $all_users_admin = User::where('role_as', '1')->get();
        $all_users_admin = User::findOrFail($usr_id);
        $all_users_client = User::where('role_as','0')->get();
        return view('admin.user.index',compact('all_users_admin','all_users_client'));
    }

    function view_report(int $user_id){
        $user_admin  = User::findOrFail($user_id);
        $users = User::where('role_as','0')->get();
        $category_hidden = Category::where('status','1')->get();
        $category_visible = Category::where('status', '0')->get();
        $product_hidden = Product::where('status', '1')->get();
        $product_visible = Product::where('status','0')->get();
        $users_all = User::where('role_as','0')->get();

        return view('admin.analy.generate-report',
        compact('user_admin','users',
        'category_visible',
        'category_hidden',
        'product_hidden',
        'product_visible','users_all'));
    }
    function generate_report(int $user_id){
        // $pdf = Pdf::loadView('pdf.invoice', $data);
        // return $pdf->download('report.pdf');
        $user_admin  = User::findOrFail($user_id);
        $users = User::where('role_as', '0')->get();
        $category_hidden = Category::where('status', '1')->get();
        $category_visible = Category::where('status', '0')->get();
        $product_hidden = Product::where('status', '1')->get();
        $product_visible = Product::where('status', '0')->get();
        $users_all = User::where('role_as', '0')->get();

        // $data = [$user_admin,$users,$category_hidden,$category_visible,$product_hidden,$product_visible];

        $pdf = reportpdf::loadView('admin.analy.generate-report', compact(
            'user_admin',
            'users',
            'category_visible',
            'category_hidden',
            'product_hidden',
            'product_visible',
            'users_all'
        ));
        $todyDate = Carbon::now()->format('d-m-Y');

        return $pdf->download('report-'.'-'.$todyDate.'.pdf');
    }
    function index_purchases()
    {
        $products = Product::where('status', '0')->get();
        return view('admin.analy.tables', compact('products'));
        // return view('admin.analy.tables');
    }
    function order_invoice(int $order_id)
    {   
        $products_order = Product::find($order_id);
        // $users_all = User::where('role_as', '0')->get();
        $pdf = reportpdf::loadView('admin.analy.generate-invoic', compact('products_order'));
        $todyDate = Carbon::now()->format('d-m-Y');

        return $pdf->download('order-' . '-' . $todyDate . '.pdf');

        // return view('admin.analy.tables');
    }
    function show_order_invoice(int $order_id)
    {
        $products_order = Product::find($order_id);
        // $users_all = User::where('role_as', '0')->get();
        return view('admin.analy.generate-invoic', compact('products_order'));



        // return view('admin.analy.tables');
    }

}
