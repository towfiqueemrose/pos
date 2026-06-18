<?php

namespace Database\Seeders;

use App\User;
use App\Business;
use App\Utils\BusinessUtil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class DummyBusinessSeeder extends Seeder
{
    public function run()
    {
        DB::beginTransaction();

        try {
            $businessUtil = app(BusinessUtil::class);

            $user = User::create_user([
                'surname' => 'Admin',
                'first_name' => 'Admin',
                'last_name' => null,
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => '123456',
                'language' => 'en',
            ]);

            $business_details = [
                'name' => 'Default Business',
                'currency_id' => 2,
                'start_date' => now()->format('Y-m-d'),
                'time_zone' => 'America/Phoenix',
                'fy_start_month' => 1,
                'accounting_method' => 'fifo',
                'owner_id' => $user->id,
            ];

            $business = $businessUtil->createNewBusiness($business_details);

            $user->business_id = $business->id;
            $user->save();

            $businessUtil->newBusinessDefaultResources($business->id, $user->id);

            $location = $businessUtil->addLocation($business->id, [
                'name' => 'Default Location',
                'country' => 'USA',
                'state' => 'Arizona',
                'city' => 'Phoenix',
                'zip_code' => '85001',
                'landmark' => 'Main Street',
            ]);

            Permission::create(['name' => 'location.' . $location->id]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
