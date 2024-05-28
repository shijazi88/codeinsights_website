<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {        
    return view('home');
})->name('home');

Route::get('/about_us', function () {        
    return view('about_us');
})->name('about_us');


Route::get('/services', function () {        
    return view('services');
})->name('services');


Route::get('/products', function () {        
    return view('products');
})->name('products');

Route::get('/product/{name}', function ($name) {
    switch ($name) {
        case 'Amwal ERP':
            $content = 'Amwal is a complete range of integrated administrative and financial programs, that are of easy and simple use to help customers manage and operate their institution or company whether it is a business facility, service facility or industrial establishment. Amwal system was designed for the service of decision maker and for the Arab and Saudi firms, with its features and functions that meet all their needs, rendering the ability of making sound administrative decisions to run business efficiently and effectively. Further, the system helps users manage their business better and in the shortest time and at the lowest cost.';
            $title = "Amwal ERP System hero banne";
            $image_url = "../images/Amwal-ERP-System-.png";
            break;
        case 'Banan Plus Payroll':
            $content = 'The Banan Plus system organizes the process of staff attendance, departure, absence, leave to monitor working time and extract reports important to the employer designed to increase the efficiency of work and take optimal advantage of human resources available at the facility. The system is easily connected to fingerprint devices that are used at the gates to control the process of entry and exit, maintain working time, and record the different events. The system easily manages everything related to your staff, such as your employees’ personal data, salaries, record, absence, overtime, advances, and rewards. In addition, the system encompasses a number of options that comply with most facilities in terms of the calculation of salaries, leaves, and insurances.';
            $title = "Personnel Management System (Banan Plus) hero banner";
            $image_url = "../images/Banan-Plus-Payroll.jpg.png";
            break;
        case 'Fixed Assets Management':
            $content = 'This system archives all the data of an asset and records the movement of the asset between sites and staff. It issues a pseudo or hypothetical deprecation for each period of the fiscal year according to the configuration of the system administrator in order to assist the company in following up with the assets and the expenses of deprecation per each asset separately.';
            $title = "Fixed Assets Management System";
            $image_url = "../images/Fixed-Assets-Management-System-1.png";
            break;
        case 'Restaurant Management':
            $content = 'Restaurants Management System is considered an integral system, capable of meeting the needs of all (restaurants, cafes, clubs, and all centers of serving various meals and beverages). It gives the ability to control and adjust the procedures automatically based on the inputs that can help in making sound decisions. Further, it is easy to use, leading to an improvement in employees’ performance in restaurants and cafes and therefore raising the efficiency and level of service. This system renders the necessary tools for total management of restaurants and cafes in a remarkable and professional manner.';
            $title = "Restaurant Management hero banner";
            $image_url = "../images/Restaurant-Management-System.png";
            break;
        case 'Point Of Sale':
            $content = 'The P.O.S system was designed to manage all types of retail stores to regularize sales and fulfill speed, accuracy, control, sales and profit increase, and achieve the highest level of customers’ allegiance. It can be used according to the type and activity of any facility. Furthermore, it works with barcode-scanning devices and is compatible with all types of Cashier machines.';
            $title = "Point of Sales System hero banner";
            $image_url = "../images/Points-of-Sales-System-.png";
            break;
        case 'Human Resources':
            $content = 'This system was designed as integral to Amwal ERP system in order to meet the administrative requirements of any company or organization and to help on organizing the administration activities very accurately by integrated reports that provide assistance on making important decisions to accomplish the administrative work efficiently. The system consists of a set of keys sub-systems as follows: (1) Human Resources System (Personnel- Medical Care), (2) Salaries and Wages System (Benefits – Installments), (3) Insurance System';
            $title = "Human Resources System hero banner";
            $image_url = "../images/Human-Resources-System.png";
            break;        
        default:
            // code...
            $content = "test content";
            $title = "test title";
            $image_url = "../images/agency4-services-icon1.png";
            break;
    }    
    return view('product_detail', ['name'=>$name, 'title'=>$title, 'content'=>$content, 'image_url'=>$image_url]);
})->name('product_detail');


Route::get('/contact', function () {        
    return view('contact');
})->name('contact');