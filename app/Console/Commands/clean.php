<?php

namespace App\Console\Commands;

use App\Models\admin\Catagory;
use App\Models\admin\ProductManger;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleaning and adding products with catagories';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->username = 'rahee318';
        $user->referal = 'default';
        $user->referal_bouns = '0';
        $user->account_type = 'registered';
        $user->email = 'raheelanwaar0316@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'Basharat Ali';
        $user->username = 'basharat604';
        $user->email = 'raheelanwaar28@gmail.com';
        $user->referal = 'default';
        $user->referal_bouns = '0';
        $user->account_type = 'registered';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

        // make new categories

        $catagory = new Catagory();
        $catagory->catagory_name = 'Shirt';
        $catagory->catagory_des = 'All kind of Shirts with new design and sizes';
        $catagory->catagory_img = 'images/01.png';
        $catagory->save();

        $catagory = new Catagory();
        $catagory->catagory_name = 'Sports';
        $catagory->catagory_des = 'All kind of Sports with new design and sizes';
        $catagory->catagory_img = 'images/05.png';
        $catagory->save();

        $catagory = new Catagory();
        $catagory->catagory_name = 'Fashion';
        $catagory->catagory_des = 'All kind of Fashion with new design and sizes';
        $catagory->catagory_img = 'images/07.png';
        $catagory->save();

        $catagory = new Catagory();
        $catagory->catagory_name = 'Electronic';
        $catagory->catagory_des = 'All kind of Electronic with new design and sizes';
        $catagory->catagory_img = 'images/09.png';
        $catagory->save();

        $catagory = new Catagory();
        $catagory->catagory_name = 'Furniture';
        $catagory->catagory_des = 'All kind of Furniture with new design and sizes';
        $catagory->catagory_img = 'images/03.png';
        $catagory->save();

        $catagory = new Catagory();
        $catagory->catagory_name = 'Shoes';
        $catagory->catagory_des = 'All kind of Shoes with new design and sizes';
        $catagory->catagory_img = 'images/04.png';
        $catagory->save();


        // Adding new Products

        $product = new ProductManger();
        $product->product_name = 'Red Shirt';
        $product->product_id = '#122222';
        $product->product_catagory = 'Shirt';
        $product->product_description = 'Red Shirt with all sizes and designs';
        $product->product_price = '500';
        $product->product_qty = '5';
        $product->product_img = 'images/09.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#2';
        $product->product_catagory = 'Shoes';
        $product->product_description = 'Product with all sizes and designs';
        $product->product_price = '900';
        $product->product_qty = '5';
        $product->product_img = 'images/09.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#3212';
        $product->product_catagory = 'Shirt';
        $product->product_description = 'Product with all sizes and designs';
        $product->product_price = '4300';
        $product->product_qty = '5';
        $product->product_img = 'images/09.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#7654';
        $product->product_discount = 50;
        $product->product_catagory = 'Sports';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '500';
        $product->product_qty = '5';
        $product->product_img = 'images/21.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#984';
        $product->product_catagory = 'Fashion';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '500';
        $product->product_qty = '5';
        $product->product_img = 'images/09.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#1222';
        $product->product_catagory = 'Shirt';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '500';
        $product->product_qty = '5';
        $product->product_img = 'images/14.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#524';
        $product->product_catagory = 'Electronic';
        $product->product_description = 'Product with all sizes and designs';
        $product->product_price = '7000';
        $product->product_qty = '6';
        $product->product_img = 'images/25.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Belt';
        $product->product_id = '#097';
        $product->product_catagory = 'Furniture';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '300';
        $product->product_qty = '9';
        $product->product_img = 'images/17.png';
        $product->save();


        $product = new ProductManger();
        $product->product_name = 'Fashion';
        $product->product_id = '#124422';
        $product->product_catagory = 'Fashion';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '100';
        $product->product_qty = '3';
        $product->product_img = 'images/20.png';
        $product->save();

        $product = new ProductManger();
        $product->product_name = 'Product';
        $product->product_id = '#122222';
        $product->product_catagory = 'Sports';
        $product->product_description = 'Product Description with all sizes and designs';
        $product->product_price = '50055';
        $product->product_qty = '1';
        $product->product_img = 'images/18.png';
        $product->save();


        $product = new ProductManger();
        $product->product_name = 'Mobile';
        $product->product_id = '#37338';
        $product->product_discount = 30;
        $product->product_catagory = 'Electronic';
        $product->product_description = 'Mobile with all sizes and designs';
        $product->product_price = '50000';
        $product->product_qty = '3';
        $product->product_img = 'images/12.png';
        $product->save();

        return Command::SUCCESS;
    }
}
