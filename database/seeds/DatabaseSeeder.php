<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * The reason for this is because all these seeds are auto-generated
         * using the `iseed` package and the insert arrays may look strange.
         */
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(CarouselSectionsTableSeeder::class);
        $this->call(AboutSectionsTableSeeder::class);
        $this->call(PeopleSectionsTableSeeder::class);
        $this->call(ProjectSectionsTableSeeder::class);
        $this->call(ContactMessagesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
